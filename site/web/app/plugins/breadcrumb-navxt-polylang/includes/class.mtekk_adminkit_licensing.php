<?php
/*  
	Copyright 2007-2016  John Havlik  (email : john.havlik@mtekk.us)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
require_once(dirname(__FILE__) . '/block_direct_access.php');
if(!class_exists('EDD_SL_Plugin_Updater'))
{
	//Load our custom updater
	include(dirname(__FILE__) . '/EDD_SL_Plugin_Updater.php');
}
class mtekk_adminKit_licensing extends mtekk_adminKit
{
	protected $product_api_url = 'https://mtekk.us/';
	protected $product_name = 'Some Product';
	protected $product_author = 'John Havlik';
	protected $product_prefix = '';
	protected $product_tab = '#extensions';
	/**
	 * Administrative interface class default constructor
	 * 
	 * @param bcn_breadcrumb_trail $breadcrumb_trail a breadcrumb trail object
	 */
	public function __construct($basename)
	{
		//We set the plugin basename here
		$this->plugin_basename = $basename;
		add_filter($this->unique_prefix . '_opts_update_prebk', array($this, 'pre_update'));
		//Need adminKit's wp_loaded routines to run, have to add this as we do not call the parent constructor
		add_action('wp_loaded', array($this, 'wp_loaded'));
		//Need to execute before the default runtime of the adminKit loader to allow license activation/deactivation to appear seamlessly
		add_action('admin_init', array($this, 'init'), 9);
	}
	public function init()
	{
		//Have to apply the filter to get good defaults in
		$this->opt = apply_filters($this->unique_prefix . '_settings_init', $this->opt);
		//Synchronize up our settings with the database as we're done modifying them now
		$this->opt = $this->parse_args($this->get_option($this->unique_prefix . '_options'), $this->opt);
		//Run the opts fix filter
		$this->opts_fix($this->opt);
		//Setup the updater
		$edd_updater = new EDD_SL_Plugin_Updater($this->product_api_url, $this->plugin_basename, array(
				//Current version number
				'version' => $this->version,
				//License key
				'license' => $this->opt['S' . $this->product_prefix . '_key'],
				//Name of this plugin
				'item_name' => $this->product_name,
				'author' => $this->product_author
			)
		);
		if(isset($_REQUEST[$this->unique_prefix . '_' . $this->product_prefix . '_license_activate']))
		{
			//Need to check to see if this is from the form button, if so save the options first
			if(isset($_POST[$this->unique_prefix . '_' . $this->product_prefix . '_license_activate_nonce']))
			{
				//Want to update the options before trying to activate the license
				$this->opts_update();
			}
			//Now activate the licsense
			$this->activate_license();
		}
		else if(isset($_POST[$this->unique_prefix . '_' . $this->product_prefix . '_license_deactivate']))
		{
			$this->deactivate_license();
		}
	}
	function activate_license()
	{
		//Ensure the user had permissions to do this
		$this->security();
		//Nonce check first
		if(isset($_POST[$this->unique_prefix . '_' . $this->product_prefix . '_license_activate_nonce']))
		{
			$nonce_field = $this->unique_prefix . '_' . $this->product_prefix . '_license_activate_nonce';
		}
		else
		{
			$nonce_field = '_wpnonce';	
		}
	 	if(!check_admin_referer($this->unique_prefix . '_' . $this->product_prefix . '_license_activate', $nonce_field))
		{
			return;
		}
		//Data to send in our API request
		$api_params = array(
			'edd_action'=> 'activate_license',
			'license' 	=> $this->opt['S' . $this->product_prefix . '_key'],
			'item_name' => urlencode($this->product_name)
		);
		//Call the software licensing API
		$response = wp_remote_get(add_query_arg($api_params, $this->product_api_url), array('timeout' => 15, 'sslverify' => false));
		//Exit if we recieved an error
		if(is_wp_error($response))
		{
			$this->message['error fade'][] = __('Faild to contact licensing server.', $this->identifier);
			add_action('admin_notices', array($this, 'messages'));
			return false;
		}	
		//Decode the license data
		$license_data = json_decode(wp_remote_retrieve_body($response));
		//Expect $license_data->license to be either "valid" or "invalid"
		if(is_object($license_data) && $license_data->license !== "valid")
		{
			$this->message['error fade'][] =  sprintf(__('%s License key not valid.', $this->identifier), $this->product_name);
			add_action('admin_notices', array($this, 'messages'));
			$this->opt['J' . $this->product_prefix . '_key_status'] = $license_data->license;
		}
		else if(!isset($license_data->license))
		{
			$this->message['error fade'][] = __('Abnormal license server response, please try activating again.', $this->identifier);
			add_action('admin_notices', array($this, 'messages'));
			$this->opt['J' . $this->product_prefix . '_key_status'] = 'inactive';
		}
		else
		{
			//TODO add undo to this
			$this->message['updated fade'][] = sprintf(__('%s License key successfully activated.', $this->identifier), $this->product_name);
			add_action('admin_notices', array($this, 'messages'));
			$this->opt['J' . $this->product_prefix . '_key_status'] = $license_data->license;
		}
		//Store the options
		$this->update_option($this->unique_prefix . '_options', $this->opt);
	}
	function deactivate_license()
	{
		//Ensure the user had permissions to do this
		$this->security();
		//Nonce check first
	 	if(!check_admin_referer($this->unique_prefix . '_' . $this->product_prefix . '_license_deactivate', $this->unique_prefix . '_' . $this->product_prefix . '_license_deactivate_nonce'))
		{
			return;
		}
		//Data to send in our API request
		$api_params = array(
			'edd_action'=> 'deactivate_license',
			'license' 	=> $this->opt['S' . $this->product_prefix . '_key'],
			'item_name' => urlencode($this->product_name)
		);
		//Call the software licensing API
		$response = wp_remote_get(add_query_arg($api_params, $this->product_api_url), array('timeout' => 15, 'sslverify' => false));
		//Exit if we recieved an error
		if(is_wp_error($response))
		{
			return false;
		}	
		//Decode the license data
		$license_data = json_decode(wp_remote_retrieve_body($response));
		if(!isset($license_data->license))
		{
			$this->message['error fade'][] = __('Abnormal license server response, please try deactivating again.', $this->identifier);
			add_action('admin_notices', array($this, 'messages'));
		}
		else if($license_data->license == 'failed')
		{
			$this->message['error fade'][] = __('License server rejected deactivation request.', $this->identifier);
			add_action('admin_notices', array($this, 'messages'));
		}
		else
		{
			//TODO add undo to this
			$this->message['updated fade'][] = sprintf(__('%s License key successfully deactivated.', $this->identifier), $this->product_name);
			add_action('admin_notices', array($this, 'messages'));
			//Expect $license_data->license to be either "deactivated" or "failed"
			$this->opt['J' . $this->product_prefix . '_key_status'] = $license_data->license;
		}
		//Store the options
		$this->update_option($this->unique_prefix . '_options', $this->opt);
	}
	function pre_update($settings)
	{
		//Only care if there is a key being saved
		if(isset($_POST[$this->unique_prefix . '_options']['S' . $this->product_prefix . '_key']))
		{
			//First trim out any whitespaces
			$_POST[$this->unique_prefix . '_options']['S' . $this->product_prefix . '_key'] = trim($_POST[$this->unique_prefix . '_options']['S' . $this->product_prefix . '_key']);
			//Deactivate the license if it's changing
			if($settings['S' . $this->product_prefix . '_key'] !== $_POST[$this->unique_prefix . '_options']['S' . $this->product_prefix . '_key'] && $settings['J' . $this->product_prefix . '_key_status'] = 'active')
			{
				$settings['J' . $this->product_prefix . '_key_status'] = 'inactive';
				//TODO fix so we load to the correct settings tab
				//Notify the user that the new key needs to be activated
				$this->message['updated fade'][] = sprintf(__('New %s license key detected.', $this->identifier), $this->product_name)
				. $this->nonced_anchor($this->admin_url() . $this->product_tab,
					$this->product_prefix . '_license_activate',
					'true',
					__('Activate the new license now.', $this->identifier),
					__('Activate now.', $this->identifier));
				add_action('admin_notices', array($this, 'messages'));
			}
		}
		return $settings;
	}
	/**
	 * Admin page settings
	 */
	public function input_license_key()
	{
		$this->input_text(__('License Key', $this->identifier), 'S' . $this->product_prefix . '_key', 'large-text', false, __('The license key is used for automated updates.', $this->identifier));
		if(false !== $this->opt['S' . $this->product_prefix . '_key'])
		{?>
			<tr valign="top">	
				<th scope="row" valign="top">
					<?php _e('Activate License'); ?>
				</th>
				<td>
					<?php if($this->opt['J' . $this->product_prefix . '_key_status'] === 'valid')
					{ ?>
					<span style="color:green;"><?php _e('active'); ?></span>
						<?php wp_nonce_field($this->unique_prefix . '_' . $this->product_prefix . '_license_deactivate', $this->unique_prefix . '_' . $this->product_prefix . '_license_deactivate_nonce'); ?>
					<input type="submit" class="button-secondary" name="<?php echo $this->unique_prefix . '_' . $this->product_prefix;?>_license_deactivate" value="<?php _e('Deactivate License', $this->identifier); ?>"/>
				<?php
					}
					else
					{
						wp_nonce_field($this->unique_prefix . '_' . $this->product_prefix . '_license_activate', $this->unique_prefix . '_' . $this->product_prefix . '_license_activate_nonce'); ?>
					<input type="submit" class="button-secondary" name="<?php echo $this->unique_prefix . '_' . $this->product_prefix;?>_license_activate" value="<?php _e('Activate License', $this->identifier); ?>"/>
				<?php } ?>
				</td>
			</tr>
		<?php
		}
	}
}