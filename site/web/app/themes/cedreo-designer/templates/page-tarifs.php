<?php
/**
 * Template Name: Page tarifs
 */


?>

<?php while (have_posts()) : the_post(); ?>

  <div class="page-wrapper small-collapse">

  <?php if( have_rows('individual') ): ?>

    <div class="columns large-6 individual">

      <h2 class="section--title"><span><?php _e('Homeowner special', 'cedreo-designer'); ?></span></h2>

      <ul class="pricing-table--wrapper no-bullet">

      <?php while( have_rows('individual') ): the_row();

        // vars
        $name = get_sub_field('name');
        $link = get_sub_field('link');
        $price = get_sub_field('price');
        $number_project = get_sub_field('number_project');
        $visual_1 = get_sub_field('visual_1');
        $visual_hd = get_sub_field('visual_hd');
        $visual_print = get_sub_field('visual_print');
        $virtual_visits = get_sub_field('virtual_visits');
        $support = get_sub_field('support');
        $features = get_sub_field('features');

        ?>

        <li class="pricing-table--column">

          <ul class="pricing-table no-bullet text-center">
            <li class="title"><?php echo $name; ?></li>
            <li class="price"><?php echo $price . __('&dollar;', 'cedreo-designer'); ?></li>
            <li class="projects-number">
            <?php if ($number_project != -1) { echo $number_project . '&nbsp;' .  __('projects', 'cedreo-designer'); } else { _e('Unlimited projects', 'cedreo-designer'); } ?></li>
            <li class="subtitle"><?php _e('Renderings', 'cedreo-designer'); ?></li>
            <li class="item">
              <?php
                if($visual_1 == 0) { echo '-'; }
                elseif ($visual_1 == -1) { _e('Unlimited test renderings', 'cedreo-designer'); }
                elseif ($visual_1 == -2) { _e('Optionnal test renderings', 'cedreo-designer'); }
                else { echo $visual_1 . '&nbsp;' . __('Test renderings', 'cedreo-designer'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($visual_hd == 0) { echo '-'; }
                elseif ($visual_hd == -1) { _e('Unlimited HD renderings', 'cedreo-designer'); }
                elseif ($visual_hd == -2) { _e('Optionnal HD renderings', 'cedreo-designer'); }
                else { echo $visual_hd . '&nbsp;' . __('HD renderings', 'cedreo-designer'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($visual_print == 0) { echo '-'; }
                elseif ($visual_print == -1) { _e('Unlimited print renderings', 'cedreo-designer'); }
                elseif ($visual_print == -2) { _e('Optionnal print renderings', 'cedreo-designer'); }
                else { echo $visual_print . '&nbsp;' . e_('Print renderings', 'cedreo-designer'); }
              ?>
            </li>
            <!-- <li class="item">
              <?php
                if($virtual_visits == 0) { echo '-'; }
                elseif ($virtual_visits == -1) { _e('Unlimited virtual visits', 'cedreo-designer'); }
                elseif ($virtual_visits == -2) { _e('Optionnal virtual visits', 'cedreo-designer'); }
                else { echo $virtual_visits . '&nbsp;' . __('Virtual visits', 'cedreo-designer'); }
              ?>
            </li> -->
            <li class="subtitle"><?php _e('Support', 'cedreo-designer'); ?></li>
            <li class="item">
              <?php if( $support && in_array('Tutoriels', $support) ) { _e('Tutorials', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Forums', $support) ) { _e('Forums', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('KBase', $support) ) { _e('Knowledge Base', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Mail', $support) ) { _e('E-mail', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Chat', $support) ) { _e('Instant messaging', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <!-- <li class="subtitle"><?php _e('Features', 'cedreo-designer'); ?></li>
            <li class="item">
              <?php if( $features && in_array('plan', $features) ) { _e('Plan 2D avancé', 'cedreo-designer'); } else { _e('Plan 2D standard', 'cedreo-designer'); } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('extend', $features) ) { _e('Accès à la bibliothèque de <br/> revêtements étendue', 'cedreo-designer'); } else { _e('Accès à la bibliothèque de <br/> revêtements free', 'cedreo-designer'); } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('a1', $features) ) { _e('Accès aux packs <br/> d\'aménagement intérieur', 'cedreo-designer'); } else { echo '- <br/> &nbsp;'; }; ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('a2', $features) ) { _e('Accès aux packs <br/> d\'aménagement extérieur', 'cedreo-designer'); } else { echo '- <br/> &nbsp;'; }; ?>
            </li> -->
            <li class="link"><a href="<?php echo $link; ?>"><?php _e('Start', 'cedreo-designer'); ?></a></li>
          </ul>

        </li>

      <?php endwhile; ?>

      </ul>
    </div>

  <?php endif; ?>

  <?php if( have_rows('pro_monthly') ): ?>

    <div class="columns large-6 pro">

      <h2 class="section--title"><span><?php _e('Business monthly', 'cedreo-designer'); ?></span></h2>

      <ul class="pricing-table--wrapper no-bullet">

      <?php while( have_rows('pro_monthly') ): the_row();

        // vars
        $name = get_sub_field('name');
        $link = get_sub_field('link');
        $price = get_sub_field('price');
        $number_project = get_sub_field('number_project');
        $visual_1 = get_sub_field('visual_1');
        $visual_hd = get_sub_field('visual_hd');
        $visual_print = get_sub_field('visual_print');
        $virtual_visits = get_sub_field('virtual_visits');
        $support = get_sub_field('support');
        $features = get_sub_field('features');

        ?>

        <li class="pricing-table--column">

          <ul class="pricing-table no-bullet text-center">
            <li class="title"><?php echo $name; ?></li>
            <li class="price"><?php echo $price . __('&dollar;', 'cedreo-designer') . ' / '. __('month', 'cedreo-designer'); ?></li>
            <li class="projects-number">
            <?php if ($number_project != -1) { echo $number_project . '&nbsp;' .  __('projects', 'cedreo-designer') . ' / '. __('month', 'cedreo-designer'); } else { _e('Unlimited projects', 'cedreo-designer'); } ?></li>
            <li class="subtitle"><?php _e('Renderings', 'cedreo-designer'); ?></li>
            <li class="item">
              <?php
                if($visual_1 == 0) { echo '-'; }
                elseif ($visual_1 == -1) { _e('Unlimited Test renderings', 'cedreo-designer'); }
                elseif ($visual_1 == -2) { _e('Optionnal Test renderings', 'cedreo-designer'); }
                else { echo $visual_1 . '&nbsp;' . __('Test renderings', 'cedreo-designer') . ' / '. __('month', 'cedreo-designer'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($visual_hd == 0) { echo '-'; }
                elseif ($visual_hd == -1) { _e('HD renderings unlimited', 'cedreo-designer'); }
                elseif ($visual_hd == -2) { _e('HD renderings optionnal', 'cedreo-designer'); }
                else { echo $visual_hd . '&nbsp;' . __('HD renderings', 'cedreo-designer') . ' / '. __('month', 'cedreo-designer'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($visual_print == 0) { echo '-'; }
                elseif ($visual_print == -1) { _e('Unlimited print renderings', 'cedreo-designer'); }
                elseif ($visual_print == -2) { _e('Optionnal print renderings', 'cedreo-designer'); }
                else { echo $visual_print . '&nbsp;' . _e('Print renderings') . ' / ' . __('month', 'cedreo-designer'); }
              ?>
            </li>
            <!-- <li class="item">
              <?php
                if($virtual_visits == 0) { echo '-'; }
                elseif ($virtual_visits == -1) { _e('Unlimited virtual visits', 'cedreo-designer'); }
                elseif ($virtual_visits == -2) { _e('Optionnal virtual visits', 'cedreo-designer'); }
                else { echo $virtual_visits . '&nbsp;' . __('Virtual visits', 'cedreo-designer') . ' / '. __('month', 'cedreo-designer'); }
              ?>
            </li> -->
            <li class="subtitle"><?php _e('Support', 'cedreo-designer'); ?></li>
            <li class="item">
              <?php if( $support && in_array('Tutoriels', $support) ) { _e('Tutorials', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Forums', $support) ) { _e('Forums', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('KBase', $support) ) { _e('Knowledge Base', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Mail', $support) ) { _e('E-mail', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Chat', $support) ) { _e('Instant messaging', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <!-- <li class="subtitle"><?php _e('Features', 'cedreo-designer'); ?></li>
            <li class="item">
              <?php if( $features && in_array('plan', $features) ) { _e('Plan 2D avancé', 'cedreo-designer'); } else { _e('Plan 2D standard', 'cedreo-designer'); } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('extend', $features) ) { _e('Accès à la bibliothèque de <br/> revêtements étendue', 'cedreo-designer'); } else { _e('Accès à la bibliothèque de <br/> revêtements free', 'cedreo-designer'); } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('a1', $features) ) { _e('Accès aux packs <br/> d\'aménagement intérieur', 'cedreo-designer'); } else { echo '- <br/> &nbsp;'; } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('a2', $features) ) { _e('Accès aux packs <br/> d\'aménagement extérieur', 'cedreo-designer'); } else { echo '- <br/> &nbsp;'; } ?>
            </li> -->
            <li class="link"><a href="<?php echo $link; ?>"><?php _e('Start', 'cedreo-designer'); ?></a></li>
          </ul>

        </li>

      <?php endwhile; ?>

      </ul>
    </div>

  <?php endif; ?>

  <?php if( have_rows('pro_annually') ): ?>

    <div class="columns pro2">

      <h2 class="section--title"><span><?php _e('Business Yearly', 'cedreo-designer'); ?></span></h2>

      <p class="infoprice"><?php _e('Save 20% - 2 months free', 'cedreo-designer'); ?></p>

      <ul class="pricing-table--wrapper no-bullet">

      <?php while( have_rows('pro_annually') ): the_row();

        // vars
        $name = get_sub_field('name');
        $link = get_sub_field('link');
        $price = get_sub_field('price');
        $number_project = get_sub_field('number_project');
        $visual_1 = get_sub_field('visual_1');
        $visual_hd = get_sub_field('visual_hd');
        $visual_print = get_sub_field('visual_print');
        $virtual_visits = get_sub_field('virtual_visits');
        $support = get_sub_field('support');
        $features = get_sub_field('features');

        ?>

        <li class="pricing-table--column">

          <ul class="pricing-table no-bullet text-center">
            <li class="title"><?php echo $name; ?></li>
            <li class="price"><?php echo $price . __('&dollar;', 'cedreo-designer'). ' / '. __('year', 'cedreo-designer'); ?></li>
            <li class="projects-number">
            <?php if ($number_project != -1) { echo $number_project . '&nbsp;' .  __('projects', 'cedreo-designer'). ' / '. __('year', 'cedreo-designer'); } else { _e('unlimited projects', 'cedreo-designer'); } ?></li>
            <li class="subtitle"><?php _e('Renderings', 'cedreo-designer'); ?></li>
            <li class="item">
              <?php
                if($visual_1 == 0) { echo '-'; }
                elseif ($visual_1 == -1) { _e('Unlimited test renderings', 'cedreo-designer'); }
                elseif ($visual_1 == -2) { _e('Optionnal test renderings', 'cedreo-designer'); }
                else { echo $visual_1 . '&nbsp;' . __('Test renderings', 'cedreo-designer'). ' / '. __('year', 'cedreo-designer'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($visual_hd == 0) { echo '-'; }
                elseif ($visual_hd == -1) { _e('HD renderings unlimited', 'cedreo-designer'); }
                elseif ($visual_hd == -2) { _e('HD renderings optionnal', 'cedreo-designer'); }
                else { echo $visual_hd . '&nbsp;' . __('HD renderings', 'cedreo-designer'). ' / '. __('year', 'cedreo-designer'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($visual_print == 0) { echo '-'; }
                elseif ($visual_print == -1) { _e('Unlimited Print renderings', 'cedreo-designer'); }
                elseif ($visual_print == -2) { _e('Optionnal Print renderings', 'cedreo-designer'); }
                else { echo $visual_print . '&nbsp;' . _e('Print renderings', 'cedreo-designer'). ' / '. __('year', 'cedreo-designer'); }
              ?>
            </li>
            <!-- <li class="item">
              <?php
                if($virtual_visits == 0) { echo '-'; }
                elseif ($virtual_visits == -1) { _e('Unlimited virtual visits', 'cedreo-designer'); }
                elseif ($virtual_visits == -2) { _e('Optionnal virtual visits', 'cedreo-designer'); }
                else { echo $virtual_visits . '&nbsp;' . __('Virtual visits', 'cedreo-designer'). ' / '. __('year ', 'cedreo-designer'); }
              ?>
            </li> -->
            <li class="subtitle"><?php _e('Support', 'cedreo-designer'); ?></li>
            <li class="item">
              <?php if( $support && in_array('Tutoriels', $support) ) { _e('Tutorials', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Forums', $support) ) { _e('Forums', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('KBase', $support) ) { _e('Knowledge Base', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Mail', $support) ) { _e('E-mail', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Chat', $support) ) { _e('Instant messaging', 'cedreo-designer'); } else { echo '-'; } ?>
            </li>
            <!-- <li class="subtitle"><?php _e('Features', 'cedreo-designer'); ?></li>
            <li class="item">
              <?php if( $features && in_array('plan', $features) ) { _e('Plan 2D avancé', 'cedreo-designer'); } else { _e('Plan 2D standard', 'cedreo-designer'); } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('extend', $features) ) { _e('Accès à la bibliothèque de <br/> revêtements étendue', 'cedreo-designer'); } else { _e('Accès à la bibliothèque de <br/> revêtements free', 'cedreo-designer'); } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('a1', $features) ) { _e('Accès aux packs <br/> d\'aménagement intérieur', 'cedreo-designer'); } else { echo '- <br/> &nbsp;'; } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('a2', $features) ) { _e('Accès aux packs <br/> d\'aménagement extérieur', 'cedreo-designer'); } else { echo '- <br/> &nbsp;'; } ?>
            </li> -->
            <li class="link"><a href="<?php echo $link; ?>"><?php _e('Start', 'cedreo-designer'); ?></a></li>
          </ul>

        </li>

      <?php endwhile; ?>

      </ul>
    </div>

  <?php endif; ?>

  <?php if( have_rows('packs') ): ?>

    <div class="columns packs">

      <h2 class="section--title"><span><?php _e('Packages', 'cedreo-designer'); ?></span></h2>

      <ul class="pricing-table--wrapper no-bullet">

      <?php while( have_rows('packs') ): the_row();

        // vars
        $name = get_sub_field('name');
        $link = get_sub_field('link');
        $price = get_sub_field('price');

        ?>

        <li class="pricing-table--column">

          <ul class="pricing-table no-bullet text-center">
            <li class="title"><?php echo $name; ?></li>
            <li class="price"><?php echo $price . __('&dollar;', 'cedreo-designer'); ?></li>
            <li class="link"><a href="<?php echo $link; ?>"><?php _e('Choose', 'cedreo-designer'); ?></a></li>
          </ul>

        </li>

      <?php endwhile; ?>

      </ul>
    </div>

  <?php endif; ?>

  </div>

  <section class="section faq">
    <?php if( have_rows('faq') ): ?>

    <div class="row">

    <div class="columns large-8 large-centered">
      <h2 class="section--title"><span><?php _e('FAQs', 'cedreo-designer'); ?></span></h2>

      <ul class="faq--items">

      <?php while( have_rows('faq') ): the_row();

        // vars
        $q = get_sub_field('question');
        $a = get_sub_field('answer');

        ?>

        <li class="faq--item">
          <h3 class="faq--question"><?php echo $q; ?></h3>
          <div class="faq--answer"><?php echo $a; ?></div>
        </li>

      <?php endwhile; ?>

      </ul>
    </div>

    </div>

  <?php endif; ?>
  </section>


<?php endwhile; ?>
