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
require_once(dirname(__FILE__) . '/includes/block_direct_access.php');
if(!class_exists('mtekk_adminKit_licensing'))
{
	//Load the adminKit licensing class
	include(dirname(__FILE__) . '/includes/class.mtekk_adminkit_licensing.php');
}
class bcn_polylang_admin extends mtekk_adminKit_licensing
{
	//Standard adminKit properties
	protected $version = '1.0.0';
	protected $access_level = 'manage_options';
	protected $unique_prefix = 'bcn';
	protected $identifier = 'breadcrumb-navxt';
	//adminKit licensing properties
	protected $product_api_url = 'https://mtekk.us/';
	protected $product_name = 'Breadcrumb NavXT Polylang Extensions';
	protected $product_author = 'John Havlik';
	protected $product_prefix = 'polylang';
	protected $product_tab = '#extensions';
	/**
	 * Administrative interface class default constructor
	 * 
	 * @param bcn_breadcrumb_trail $breadcrumb_trail a breadcrumb trail object
	 */
	public function __construct($basename)
	{
		//Can't use admin_page as our function is not comptible with mtekk_adminKit::admin_page
		add_action('bcn_after_settings_tab_extensions', array($this, 'polylang_admin'));
		//Want to run the parent's constructor
		parent::__construct($basename);
	}
	/**
	 * Admin page settings
	 */
	public function polylang_admin($opt)
	{
		//Map our options so mtekk_adminKit can work it's magic
		$this->opt =& $opt;
		?>
		<h3><?php _e('Polylang Extensions', 'breadcrumb-navxt-polylang'); ?></h3>
		<table class="form-table">
			<?php $this->input_license_key(); ?>
		</table>
		<?php
	}
}