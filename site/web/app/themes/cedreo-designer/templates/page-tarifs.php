<?php
/**
 * Template Name: Page tarifs
 */


?>

<?php while (have_posts()) : the_post(); ?>

  <div class="page-wrapper">

  <?php if( have_rows('individual') ): ?>

    <div class="columns large-6 individual">

      <h2 class="section--title"><span><?php echo __('Spécial particulier', 'cedreo'); ?></span></h2>

      <ul class="pricing-table--wrapper no-bullet">

      <?php while( have_rows('individual') ): the_row();

        // vars
        $name = get_sub_field('name');
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
            <li class="price"><?php echo $price . __('&euro; HT', 'cedreo'); ?></li>
            <li class="projects-number">
            <?php if ($number_project != -1) { echo $number_project . '&nbsp;' .  __('projets', 'cedreo'); } else { echo __('Projets illimités', 'cedreo'); } ?></li>
            <li class="subtitle"><?php echo __('Visuels', 'cedreo'); ?></li>
            <li class="item">
              <?php
                if($visual_1 == 0) { echo '-'; }
                elseif ($visual_1 == -1) { echo __('Visuels de travail illimités', 'cedreo'); }
                elseif ($visual_1 == -2) { echo __('Visuels de travail en option', 'cedreo'); }
                else { echo $visual_1 . '&nbsp;' . __('Visuels de travail', 'cedreo'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($visual_hd == 0) { echo '-'; }
                elseif ($visual_hd == -1) { echo __('Visuels HD illimités', 'cedreo'); }
                elseif ($visual_hd == -2) { echo __('Visuels HD en option', 'cedreo'); }
                else { echo $visual_hd . '&nbsp;' . __('Visuels HD', 'cedreo'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($visual_print == 0) { echo '-'; }
                elseif ($visual_print == -1) { echo __('Visuels print illimités', 'cedreo'); }
                elseif ($visual_print == -2) { echo __('Visuels print en option', 'cedreo'); }
                else { echo $visual_print . '&nbsp;' . __('Visuels print', 'cedreo'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($virtual_visits == 0) { echo '-'; }
                elseif ($virtual_visits == -1) { echo __('Visite virtuelle illimitée', 'cedreo'); }
                elseif ($virtual_visits == -2) { echo __('Visite virtuelle en option', 'cedreo'); }
                else { echo $virtual_visits . '&nbsp;' . __('Visuels de travail', 'cedreo'); }
              ?>
            </li>
            <li class="subtitle"><?php echo __('Support', 'cedreo'); ?></li>
            <li class="item">
              <?php if( $support && in_array('Tutoriels', $support) ) { echo __('Accès aux tutoriels', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Forums', $support) ) { echo __('Accès aux Forums', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Kbase', $support) ) { echo __('Accès à la Knoweldge Base', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Mail', $support) ) { echo __('Support personnalisé par mail', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Chat', $support) ) { echo __('Support personnalisé par chat', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="subtitle"><?php echo __('Fonctionnalités', 'cedreo'); ?></li>
            <li class="item">
              <?php if( $features && in_array('plan', $features) ) { echo __('Plan 2D avancé', 'cedreo'); } else { echo __('Plan 2D standard', 'cedreo'); } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('extend', $features) ) { echo __('Accès à la bibliothèque de <br/> revêtements étendue', 'cedreo'); } else { echo __('Accès à la bibliothèque de <br/> revêtements free', 'cedreo'); } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('a1', $features) ) { echo __('Accès aux packs <br/> d\'aménagement intérieur', 'cedreo'); } else { echo '- <br/> &nbsp;'; }; ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('a2', $features) ) { echo __('Accès aux packs <br/> d\'aménagement extérieur', 'cedreo'); } else { echo '- <br/> &nbsp;'; }; ?>
            </li>
            <li class="link"><a href="http://app.cedreo-designer.com/fr/register/"><?php echo __('Démarrer', 'cedreo'); ?></a></li>
          </ul>

        </li>

      <?php endwhile; ?>

      </ul>
    </div>

  <?php endif; ?>

  <?php if( have_rows('pro_monthly') ): ?>

    <div class="columns large-6 pro">

      <h2 class="section--title"><span><?php echo __('Professionnels mensuels', 'cedreo'); ?></span></h2>

      <ul class="pricing-table--wrapper no-bullet">

      <?php while( have_rows('pro_monthly') ): the_row();

        // vars
        $name = get_sub_field('name');
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
            <li class="price"><?php echo $price . __('&euro; HT / mois', 'cedreo'); ?></li>
            <li class="projects-number">
            <?php if ($number_project != -1) { echo $number_project . '&nbsp;' .  __('projets / mois', 'cedreo'); } else { echo __('Projets illimités', 'cedreo'); } ?></li>
            <li class="subtitle"><?php echo __('Visuels', 'cedreo'); ?></li>
            <li class="item">
              <?php
                if($visual_1 == 0) { echo '-'; }
                elseif ($visual_1 == -1) { echo __('Visuels de travail illimités', 'cedreo'); }
                elseif ($visual_1 == -2) { echo __('Visuels de travail en option', 'cedreo'); }
                else { echo $visual_1 . '&nbsp;' . __('Visuels de travail / mois', 'cedreo'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($visual_hd == 0) { echo '-'; }
                elseif ($visual_hd == -1) { echo __('Visuels HD illimités', 'cedreo'); }
                elseif ($visual_hd == -2) { echo __('Visuels HD en option', 'cedreo'); }
                else { echo $visual_hd . '&nbsp;' . __('Visuels HD / mois', 'cedreo'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($visual_print == 0) { echo '-'; }
                elseif ($visual_print == -1) { echo __('Visuels print illimités', 'cedreo'); }
                elseif ($visual_print == -2) { echo __('Visuels print en option', 'cedreo'); }
                else { echo $visual_print . '&nbsp;' . __('Visuels print / mois', 'cedreo'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($virtual_visits == 0) { echo '-'; }
                elseif ($virtual_visits == -1) { echo __('Visites virtuelles illimitées', 'cedreo'); }
                elseif ($virtual_visits == -2) { echo __('Visites virtuelles en option', 'cedreo'); }
                else { echo $virtual_visits . '&nbsp;' . __('Visites virtuelles / mois', 'cedreo'); }
              ?>
            </li>
            <li class="subtitle"><?php echo __('Support', 'cedreo'); ?></li>
            <li class="item">
              <?php if( $support && in_array('Tutoriels', $support) ) { echo __('Accès aux tutoriels', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Forums', $support) ) { echo __('Accès aux Forums', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Kbase', $support) ) { echo __('Accès à la Knoweldge Base', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Mail', $support) ) { echo __('Support personnalisé par mail', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Chat', $support) ) { echo __('Support personnalisé par chat', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="subtitle"><?php echo __('Fonctionnalités', 'cedreo'); ?></li>
            <li class="item">
              <?php if( $features && in_array('plan', $features) ) { echo __('Plan 2D avancé', 'cedreo'); } else { echo __('Plan 2D standard', 'cedreo'); } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('extend', $features) ) { echo __('Accès à la bibliothèque de <br/> revêtements étendue', 'cedreo'); } else { echo __('Accès à la bibliothèque de <br/> revêtements free', 'cedreo'); } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('a1', $features) ) { echo __('Accès aux packs <br/> d\'aménagement intérieur', 'cedreo'); } else { echo '- <br/> &nbsp;'; } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('a2', $features) ) { echo __('Accès aux packs <br/> d\'aménagement extérieur', 'cedreo'); } else { echo '- <br/> &nbsp;'; } ?>
            </li>
            <li class="link"><a href="http://app.cedreo-designer.com/fr/register/"><?php echo __('Démarrer', 'cedreo'); ?></a></li>
          </ul>

        </li>

      <?php endwhile; ?>

      </ul>
    </div>

  <?php endif; ?>

  <?php if( have_rows('pro_annually') ): ?>

    <div class="columns pro2">

      <h2 class="section--title"><span><?php echo __('Professionnels annuels', 'cedreo'); ?></span></h2>

      <p class="infoprice">Économisez 20% sur l'année</p>

      <ul class="pricing-table--wrapper no-bullet">

      <?php while( have_rows('pro_annually') ): the_row();

        // vars
        $name = get_sub_field('name');
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
            <li class="price"><?php echo $price . __('&euro; HT', 'cedreo'); ?></li>
            <li class="projects-number">
            <?php if ($number_project != -1) { echo $number_project . '&nbsp;' .  __('projets', 'cedreo'); } else { echo __('Projets illimités', 'cedreo'); } ?></li>
            <li class="subtitle"><?php echo __('Visuels', 'cedreo'); ?></li>
            <li class="item">
              <?php
                if($visual_1 == 0) { echo '-'; }
                elseif ($visual_1 == -1) { echo __('Visuels de travail illimités', 'cedreo'); }
                elseif ($visual_1 == -2) { echo __('Visuels de travail en option', 'cedreo'); }
                else { echo $visual_1 . '&nbsp;' . __('Visuels de travail', 'cedreo'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($visual_hd == 0) { echo '-'; }
                elseif ($visual_hd == -1) { echo __('Visuels HD illimités', 'cedreo'); }
                elseif ($visual_hd == -2) { echo __('Visuels HD en option', 'cedreo'); }
                else { echo $visual_hd . '&nbsp;' . __('Visuels HD', 'cedreo'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($visual_print == 0) { echo '-'; }
                elseif ($visual_print == -1) { echo __('Visuels print illimités', 'cedreo'); }
                elseif ($visual_print == -2) { echo __('Visuels print en option', 'cedreo'); }
                else { echo $visual_print . '&nbsp;' . __('Visuels print', 'cedreo'); }
              ?>
            </li>
            <li class="item">
              <?php
                if($virtual_visits == 0) { echo '-'; }
                elseif ($virtual_visits == -1) { echo __('Visite virtuelle illimitée', 'cedreo'); }
                elseif ($virtual_visits == -2) { echo __('Visite virtuelle en option', 'cedreo'); }
                else { echo $virtual_visits . '&nbsp;' . __('Visuels de travail', 'cedreo'); }
              ?>
            </li>
            <li class="subtitle"><?php echo __('Support', 'cedreo'); ?></li>
            <li class="item">
              <?php if( $support && in_array('Tutoriels', $support) ) { echo __('Accès aux tutoriels', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Forums', $support) ) { echo __('Accès aux Forums', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Kbase', $support) ) { echo __('Accès à la Knoweldge Base', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Mail', $support) ) { echo __('Support personnalisé par mail', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="item">
              <?php if( $support && in_array('Chat', $support) ) { echo __('Support personnalisé par chat', 'cedreo'); } else { echo '-'; } ?>
            </li>
            <li class="subtitle"><?php echo __('Fonctionnalités', 'cedreo'); ?></li>
            <li class="item">
              <?php if( $features && in_array('plan', $features) ) { echo __('Plan 2D avancé', 'cedreo'); } else { echo __('Plan 2D standard', 'cedreo'); } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('extend', $features) ) { echo __('Accès à la bibliothèque de <br/> revêtements étendue', 'cedreo'); } else { echo __('Accès à la bibliothèque de <br/> revêtements free', 'cedreo'); } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('a1', $features) ) { echo __('Accès aux packs <br/> d\'aménagement intérieur', 'cedreo'); } else { echo '- <br/> &nbsp;'; } ?>
            </li>
            <li class="item">
              <?php if( $features && in_array('a2', $features) ) { echo __('Accès aux packs <br/> d\'aménagement extérieur', 'cedreo'); } else { echo '- <br/> &nbsp;'; } ?>
            </li>
            <li class="link"><a href="http://app.cedreo-designer.com/fr/register/"><?php echo __('Démarrer', 'cedreo'); ?></a></li>
          </ul>

        </li>

      <?php endwhile; ?>

      </ul>
    </div>

  <?php endif; ?>

  <?php if( have_rows('packs') ): ?>

    <div class="columns packs">

      <h2 class="section--title"><span><?php echo __('Nos Packs', 'cedreo'); ?></span></h2>

      <ul class="pricing-table--wrapper no-bullet">

      <?php while( have_rows('packs') ): the_row();

        // vars
        $name = get_sub_field('name');
        $price = get_sub_field('price');

        ?>

        <li class="pricing-table--column">

          <ul class="pricing-table no-bullet text-center">
            <li class="title"><?php echo $name; ?></li>
            <li class="price"><?php echo $price . __('&euro; HT', 'cedreo'); ?></li>
            <li class="link"><a href="http://app.cedreo-designer.com/fr/register/"><?php echo __('Choisissez', 'cedreo'); ?></a></li>
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

    <div class="colums large-8 large-centered">
      <h2 class="section--title"><span><?php echo __('FAQs', 'cedreo'); ?></span></h2>

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
