<?php
/**
 * Template Name: Accueil
 */
?>

<?php while (have_posts()) : the_post(); ?>

  <div class="section accesdirect">
    <nav class="no-bullet accesdirect--items">
      <a class="accesdirect--button" href="#why">
        <svg class="picto" viewBox="0 0 206.8 139.1">
          <path d="M166 53.6C164.1 23.7 138.6 0 107.5 0 82.8 0 61.1 14.8 52.6 37.2h-2.2C22.6 37.1 0 60 0 88.1s22.6 51 50.4 51h116.1c.3 0 .5 0 .8-.1 22.2-1.5 39.4-20.1 39.4-42.6.1-23.2-18.1-42-40.7-42.8m.4 78.3h-116c-23.9 0-43.3-19.7-43.3-43.8s19.4-43.8 43.3-43.8c1.4 0 2.9.1 4.3.2 1.7.2 3.2-.9 3.7-2.4 6.8-20.9 26.5-34.9 49-34.9 28.4 0 51.4 22.4 51.4 50.1 0 1 .4 1.9 1.1 2.6.7.7 1.7 1 2.6 1h1.8c19.4 0 35.1 16 35.1 35.6.3 18.8-14.3 34.4-33 35.4"/>
          <path d="M103.4 107h7.1v7.1h-7.1zm3.7-67.8C93.3 39.2 82 50.5 82 64.3h7.1c0-9.9 8.1-18 18-18s18 8.1 18 18-8.1 18-18 18h-3.7v21.1h7.1V89.2c12.2-1.7 21.7-12.2 21.7-24.8 0-13.9-11.2-25.2-25.1-25.2"/>
        </svg>
        <?php _e('Pourquoi', 'cdreo-designer'); ?>
      </a>
      <span class="chevron"></span>
      <a class="accesdirect--button" href="#f1">
        <svg class="picto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.2 55.3">
          <path d="M52.6 2.6c-3.5-3.5-9.2-3.5-12.7 0L3.8 38.7v.1s0 .1-.1.1c-.1.1-.1.2-.1.2v.1L0 54v.2c0 .1 0 .2.1.3v.1c0 .1.1.2.2.3.1.1.2.2.3.2.1 0 .2.1.4.1h.2l14.9-3.5h.2c.1 0 .1-.1.2-.1l.1-.1 36.1-36.1c3.4-3.5 3.4-9.3-.1-12.8M51.2 4c2.5 2.5 2.7 6.4.7 9.1l-9.8-9.8c2.7-2 6.6-1.7 9.1.7m-4.9 14.9L36.4 9l1.4-1.4 9.9 9.9-1.4 1.4zM5 50.3c-.4-.4-1-.4-1.4 0l-.8.7 2.6-10.7 4.4-.5-.6 5.1v.5c0 .1.1.1.1.2l.1.1c0 .1.1.1.2.1l.1.1c.1 0 .1 0 .2.1h.3l5.1-.6-.5 4.4-10.6 2.7.8-.8c.4-.4.4-1 0-1.4m12.5-5.5l22.4-22.4c.4-.4.4-1 0-1.4s-1-.4-1.4 0L16.1 43.4l-4.8.5.5-4.8 22.4-22.4c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0L10.4 37.7l-3.2.4 27.7-27.7 9.9 9.9L17.2 48l.3-3.2zm31.6-28.7l-9.9-9.9 1.4-1.4 9.9 9.9-1.4 1.4z"/>
        </svg>
        <?php the_field('f1_title'); ?>
      </a>
      <span class="chevron"></span>
      <a class="accesdirect--button" href="#f2">
        <svg class="picto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 39">
          <path d="M59.9 24.3l-2-7.8c-.2-.8-.8-1.3-1.6-1.4L52 12.4V5.2C52 2.4 49.6 0 46.8 0H34.3C32.5 0 31 .9 30 2.2 29 .9 27.5 0 25.8 0H13.3C10.4 0 8 2.4 8 5.3v7.2l-4.4 2.6c-.8.1-1.4.7-1.6 1.4l-2 7.8c-.1.5-.1 1 0 1.4l2 7.8c.3.9 1.1 1.5 2 1.5h2v4h2.4l4-4h35.2l4 4H54v-4h2c.9 0 1.7-.6 1.9-1.5l2-7.8c.1-.5.1-.9 0-1.4m-5.8-7.8l-1.6 6.3-1.1-1.4-1.2-1.5.3-1.1 1.2-4.1 2.6 1.6c-.1-.1-.2 0-.2.2M11.5 21h37l2.4 3H9.1l2.4-3zM34.3 2h12.5C48.5 2 50 3.5 50 5.3v7.6L48.2 19H31V5.3C31 3.4 32.5 2 34.3 2M10 5.3C10 3.5 11.5 2 13.3 2h12.5C27.5 2 29 3.4 29 5.2V19H11.8L10 12.9V5.3zm-1.6 9.2l1.5 5.2-2.4 3-1.6-6.3c0-.1-.1-.3-.1-.4l2.6-1.5zM4 33l-2-7.8v-.4L4 17l2 7.8V33H4zm4 3.6V35h1.6L8 36.6zm6.4-3.6H8v-7h44v7H14.4zM52 36.6L50.4 35H52v1.6zm6-11.4L56 33h-2v-8.2l2-7.8 2 7.8v.4"/>
        </svg>
        <?php the_field('f2_title'); ?>
      </a>
      <span class="chevron"></span>
      <a class="accesdirect--button" href="#f3">
        <svg class="picto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 55">
        <path d="M59 53V14H47v39h-3V22H32v31h-3V30H17v23h-3V39H2v14H1c-.6 0-1 .4-1 1s.4 1 1 1h58c.6 0 1-.4 1-1s-.4-1-1-1M4 41h8v12H4V41zm15-9h8v21h-8V32zm15-8h8v29h-8V24zm15-8h8v37h-8V16zM8 25.3c.2 0 .3 0 .5-.1L44.8 4.3l-2.3 5c-.2.5 0 1.1.5 1.3.1.1.3.1.4.1.4 0 .7-.2.9-.6l3.6-7.8v-1l-.1-.1s0-.1-.1-.1l-.1-.1-.1-.1s-.1 0-.1-.1H47L38.5 0c-.6-.1-1 .3-1.1.9-.1.5.3 1 .9 1.1l5.5.5-36.3 21c-.5.3-.6.9-.4 1.4.2.3.6.4.9.4"/></svg>
        <?php the_field('f3_title'); ?>
      </a>
    </nav>
  </div>

  <div class="section why">
    <a name="why" id="why" class="anchor"></a>
    <div class="row">

      <div class="columns">
        <h2 class="section--title scrollreveal"><span><?php echo __('Pourquoi', 'cedreo-designer'); ?> <?php bloginfo('title'); ?></span></h2>
      </div>

      <div class="columns large-6">
        <?php if( have_rows('arguments') ): ?>
          <ul class="no-bullet why--items">
          <?php  while ( have_rows('arguments') ) : the_row(); ?>

            <li class="why--item scrollreveal"><svg class="icon-<?php the_sub_field('picto'); ?>"><use xlink:href="#icon-<?php the_sub_field('picto'); ?>"></use></svg><?php the_sub_field('text'); ?></li>

          <?php  endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>

      <div class="columns large-6">
        <div class="video-wrapper flex-video widescreen scrollreveal" data-id="<?php the_field('video_id'); ?>">
          <div class="videoframe" id="video-player">
            lecteur video
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <a name="pros" id="pros" class="anchor"></a>
    <div class="row column">
      <h2 class="section--title scrollreveal"><span><?php echo __('Pour les pros', 'cedreo-designer'); ?></span></h2>
      <ul class="row no-bullet pros--secteur scrollreveals">
        <li class="columns large-3 medium-6 pros--secteur scrollreveal">
          <svg viewBox="0 0 100 100" class="pros--icon">
            <circle class="bg" opacity=".2" cx="50" cy="50" r="50"/>
            <circle class="bg" opacity=".6" cx="50" cy="50" r="44"/>
            <circle class="bg" cx="50" cy="50" r="40"/>
            <g fill="#FFF">
              <path d="M62.8 41.5h-6c-.4 0-.7.3-.7.7V49c0 .4.3.7.7.7h6c.4 0 .7-.3.7-.7v-6.8c0-.4-.3-.7-.7-.7m-.8 6.8h-4.5V43H62v5.3z"/>
              <path d="M72.2 38.6L49 23.6c-.2-.1-.5-.2-.8 0-.2.1-.4.4-.4.7V28c0 .3.1.5.3.6l1.2.7v12.4L28 50.6c-.3.1-.5.4-.5.7v16.5c0 .4.3.8.7.8h41.3c.4 0 .7-.3.7-.7v-25l1.1.7c.1.1.3.1.4.1.1 0 .2 0 .4-.1s.4-.4.4-.7v-3.7c0-.2-.1-.4-.3-.6M45.5 67H32.7v-1.5h12.8V67zm0-3H32.7v-1.5h12.8V64zm0-3H32.7v-1.5h12.8V61zm0-3H32.7v-1.5h12.8V58zm0-3H32.7v-1.5h12.8V55zm3.8 12H47V52.8c0-.4-.3-.7-.7-.7H32c-.4 0-.7.3-.7.7V67H29V51.8l20.2-8.4V67zm13.5 0h-6V56.5h6V67zm5.9 0h-4.5V55.7c0-.4-.3-.7-.7-.7H56c-.4 0-.7.3-.7.7V67h-4.5V30.3l18 11.6V67zM71 41.6l-21.7-14v-2l21.7 14v2z"/>
            </g>
          </svg>
          <h3 class="pros--title"><?php echo __('Bâtiment Neuf', 'cedreo-designer'); ?></h3>
          <?php if( have_rows('pro1') ): ?>
          <ul class="no-bullet pros--items">
          <?php  while ( have_rows('pro1') ) : the_row(); ?>

            <li class="pros--item">
              <svg class="icon-check"><use xlink:href="#icon-check"></use></svg>
              <?php the_sub_field('item'); ?>
            </li>

          <?php  endwhile; ?>
          </ul>
          <?php endif; ?>
        </li>
        <li class="columns large-3 medium-6 pros--secteur scrollreveal">
          <svg class="pros--icon" viewBox="0 0 100 100">
            <circle class="bg" opacity=".2" cx="50" cy="50" r="50"/>
            <circle class="bg" opacity=".6" cx="50" cy="50" r="44"/>
            <circle class="bg" cx="50" cy="50" r="40"/>
            <g fill="#FFF">
              <path d="M31.8 72c-.1.1-.6.5-1 .5s-.9-.4-1-.6l-.8-.8c-.1-.1-.5-.6-.5-1s.4-.9.6-1L45 53.2 43.7 52 27.8 67.9c-.1.1-1.1 1-1.1 2.2 0 1.2 1 2.1 1 2.2l.8.8c.1.1 1 1.1 2.2 1.1 1.2 0 2.1-1 2.2-1L49.1 57l-1.2-1.1L31.8 72zm20.8-26.7c.3-.3.3-.8 0-1.1-.3-.3-.8-.3-1.1 0l-2.7 2.7 1.1 1.2 2.7-2.8z"/>
              <path d="M69.6 41.1l-8.2-8.2c-.6-.6-1.5-.6-2.2-.1l-1.7.8-.6-.6.9-1.8c.5-1.1.1-1.8-.3-2.2l-2.7-2.7c-.3-.3-.7-.5-1.1-.5-.4 0-.8.2-1.1.5l-6.8 6.8c-.3.3-.5.7-.5 1.1 0 .4.2.8.5 1.1l2.8 2.8c.3.3 1 .8 2.1.2l1.8-.9.7.7-.8 1.7c-.2.3-.4.6-.4 1s.2.8.5 1.1l3.3 3.3c.3.3.8.3 1.1 0 .3-.3.3-.8 0-1.1l-3.3-3.3.2-.2 1.1-2.3c.2-.3.1-.7-.2-.9L53.1 36c-.2-.2-.6-.3-.9-.2L49.9 37c-.2.1-.3.1-.3.1l-2.8-2.8 6.8-6.8 2.8 2.8s0 .1-.1.3l-1.1 2.3c-.2.3-.1.7.2.9l1.5 1.5c.2.2.6.3.9.2l2.3-1.1c.1 0 .1-.1.2-.2l8.2 8.2s4.9 4.1 4.9 8.5c0 1.8 0 3-.6 4.8-2.1-6.7-6-9.3-6.2-9.5-.2-.1-.5-.2-.8-.1L61 48.2c-.2.1-.4.1-.4.1l-2-2c-.2-.2-.3-.3-.6-.2-.2 0-.4.1-.6.2l-4.9 4.9 1.1 1.2 4.3-4.3 1.4 1.4c.5.5 1.3.6 2.2.2l4.3-1.9c1.1.9 4.4 4 5.8 10.5.1.3.3.6.7.6.3 0 .7-.1.8-.4C75 55 75 53.2 75 50.8c0-5.1-5.2-9.5-5.4-9.7m-24.7 12l3 2.8.9-1-2.9-2.8z"/>
              <path d="M69.3 71.2c.3.3.3.9 0 1.2-.1.1-.1.1-.2.1l-.8.6L50 56l-.9 1 18 16.6c.9.8 2.3.8 3.2-.1.9-.9.9-2.3.1-3.2l-16.6-18-1 1 16.5 17.9zm-25.5-21L47 47l.8.9 1-1-.9-1c0-.1.1-.3.1-.4 0-.4-.2-.8-.4-1l-1.7-1.7c0-.1.1-.2.1-.2.2-2.3-.5-4.5-2.1-6.1l-8-8c-.1-.1-.3-.2-.5-.2s-.4.1-.5.2L25.2 38c-.1.1-.2.3-.2.5s.1.4.2.5l8 8c1.6 1.6 3.8 2.4 6.1 2.1.1 0 .2 0 .2-.1l1.7 1.7c.4.4 1 .5 1.5.4l1 1 1-1-.9-.9zm-4.7-2.6l-.2.2c-1.8.1-3.5-.5-4.7-1.8l-7.5-7.5.6-.6 4.8 4.8c.3.3.7.3 1 0 .3-.3.3-.7 0-1l-4.8-4.8.6-.6 8 8c.3.3.7.3 1 0 .3-.3.3-.7 0-1l-8-8 .6-.6 2.2 2.2c.3.3.7.3 1 0 .3-.3.3-.7 0-1l-2.2-2.2.6-.6L38 39c.3.3.7.3 1 0 .3-.3.3-.7 0-1l-5.9-5.9.6-.6 2.7 2.7c.3.3.7.3 1 0 .3-.3.3-.7 0-1l-2.7-2.7.6-.6 7.5 7.5c1.2 1.2 1.9 2.9 1.8 4.7l-5.5 5.5zm3.2 2.1c-.1 0-.1 0 0 0l-1.7-1.6 4.3-4.3 1.6 1.6v.1l-4.2 4.2zm9.4 2.4l1-1-2.8-3-1 1z"/>
              <path d="M48.8 54.9l-.9 1 1.2 1.1.9-1zm-2.9-2.8L44.7 51l-1 1 1.2 1.1zm5.8 0l1.1 1.2 1-1-1.1-1.2zm-2.8-3l1-1-1.1-1.2-1 1zm-5.1 1.1l.9.8zm.9.8l1.2 1.1zM39 34.8c-.3-.3-.7-.3-1 0-.1.1-.2.3-.2.5s.1.4.2.5l.5.5c.3.3.7.3 1 0 .3-.3.3-.7 0-1l-.5-.5zM35.8 38c-.3-.3-.7-.3-1 0-.1.1-.2.3-.2.5s.1.4.2.5l1.1 1.1c.3.3.7.3 1 0 .3-.3.3-.7 0-1L35.8 38zm3.2 3.2c-.3-.3-.7-.3-1 0-.1.1-.2.3-.2.5s.1.4.2.5l.5.5c.3.3.7.3 1 0 .3-.3.3-.7 0-1l-.5-.5z"/>
            </g>
          </svg>
          <h3 class="pros--title"><?php echo __('Bâtiment Ancien', 'cedreo-designer'); ?></h3>
          <?php if( have_rows('pro2') ): ?>
          <ul class="no-bullet pros--items">
          <?php  while ( have_rows('pro2') ) : the_row(); ?>

            <li class="pros--item">
              <svg class="icon-check"><use xlink:href="#icon-check"></use></svg>
              <?php the_sub_field('item'); ?>

            </li>

          <?php  endwhile; ?>
          </ul>
          <?php endif; ?>
        </li>
        <li class="columns large-3 medium-6 pros--secteur scrollreveal">
          <svg class="pros--icon" viewBox="0 0 100 100">
            <circle class="bg" opacity=".2" cx="50" cy="50" r="50"/>
            <circle class="bg" opacity=".6" cx="50" cy="50" r="44"/>
            <circle class="bg" cx="50" cy="50" r="40"/>
            <g fill="#FFF">
              <path d="M40.2 43.5c.2.2.4.2.6.2.2 0 .4-.1.6-.2l.8-.8c.4.2.8.3 1.1.3s.8-.1 1.1-.3l.8.8c.2.2.4.2.6.2s.4-.1.6-.2c.3-.3.3-.9 0-1.2l-.8-.8c.4-.7.4-1.6 0-2.3l.8-.8c.3-.3.3-.9 0-1.2-.3-.3-.9-.3-1.2 0l-.8.8c-.7-.4-1.6-.4-2.3 0l-.8-.8c-.3-.3-.9-.3-1.2 0-.3.3-.3.9 0 1.2l.8.8c-.4.7-.4 1.6 0 2.3l-.8.8c-.2.4-.2.9.1 1.2m3.8-3.7c.4.4.4 1 0 1.3-.4.4-1 .4-1.3 0-.4-.4-.4-1 0-1.3.2-.2.4-.3.7-.3.2 0 .4.1.6.3m9.6 3.7c.2.2.4.2.6.2.2 0 .4-.1.6-.2l.8-.8c.4.2.8.3 1.1.3s.8-.1 1.1-.3l.8.8c.2.2.4.2.6.2s.4-.1.6-.2c.3-.3.3-.9 0-1.2l-.8-.7c.4-.7.4-1.6 0-2.3l.8-.8c.3-.3.3-.9 0-1.2-.3-.3-.9-.3-1.2 0l-.8.8c-.7-.4-1.6-.4-2.3 0l-.8-.8c-.3-.3-.9-.3-1.2 0s-.3.9 0 1.2l.8.8c-.4.7-.4 1.6 0 2.3l-.8.8c-.2.3-.2.8.1 1.1m3.7-3.7c.4.4.4 1 0 1.3-.4.4-1 .4-1.3 0-.4-.4-.4-1 0-1.3.2-.2.4-.3.7-.3.2 0 .4.1.6.3"/>
              <path d="M74.6 45.7c-.5-.7-1.2-1.1-2-1.1H70c0-10.1-8.2-18.3-18.3-18.3h-3.3c-9.8 0-17.9 7.8-18.3 17.5h-2.5c-.9 0-1.6.4-2.1 1.1-.5.7-.6 1.6-.3 2.4l5.7 16.4c.3 1.3 1.4 2.2 2.6 2.5l-.7 7.6h3.8l1.7-7.5H62l1.7 7.5h3.8l-.7-7.6c1.2-.3 2.3-1.2 2.6-2.4L74.8 48c.3-.8.2-1.6-.2-2.3M48.3 27.9h3.3c9.2 0 16.7 7.5 16.7 16.7H68c-.1 0-.2 0-.3.1-.1 0-.1 0-.2.1-.1 0-.2.1-.2.1-.1 0-.1.1-.2.1s-.2.1-.2.1c-.1 0-.1.1-.2.1l-.2.2-.1.1-.2.2c0 .1-.1.1-.1.2-.1.1-.1.2-.2.3l-.1.1c-.1.1-.1.3-.2.5l-1.6 7v.2c-1-1.7-2.9-2.7-4.9-2.7H40.8c-1.9 0-3.7 1-4.8 2.5l-2-8.7V45c-.8-1-1.5-1.2-2.1-1.2h-.3c.5-8.9 7.8-15.9 16.7-15.9m-9.7 28.3c-.1 0-.1 0 0 0-.6-.1-1.1-.4-1.5-.8.7-1.5 2.2-2.5 3.8-2.5h18.3c1.7 0 3.2 1.1 3.9 2.6-.6.4-1.2.7-2 .7h-22c-.2.1-.4 0-.5 0m-3.4 15.9h-.6l.6-5.8h1.3l-1.3 5.8zm29.6 0l-1.3-5.8h1.3l.6 5.8h-.6zm8.5-24.7l-5.7 15.9c-.2.8-.9 1.3-1.7 1.3H34.2c-.8 0-1.5-.5-1.8-1.4l-5.7-16.5c-.1-.3-.1-.6.1-.8.2-.3.4-.4.7-.4h4.4c.2 0 .4.1.6.4l1.9 8.3c.1.6.4 1.1.7 1.6l.2.3c.4.6 1 1 1.6 1.3.1 0 .2.1.3.1.1.1.2.1.4.1.2.1.4.1.6.1h.2c.2 0 .5.1.7.1h22c.2 0 .5 0 .7-.1h.2c.2 0 .4-.1.6-.2.1 0 .2-.1.3-.1.1 0 .2-.1.3-.2.1-.1.3-.2.4-.2.1-.1.2-.1.3-.2.1-.1.2-.1.3-.2.1-.1.2-.2.3-.2l.2-.2.2-.2c.4-.5.7-1.1.8-1.8l1.6-7c.2-.6.7-1 1.3-1h4c.3 0 .5.1.7.4.1.2.1.5 0 .8"/>
            </g>
          </svg>
          <h3 class="pros--title"><?php echo __('Agencement intérieur', 'cedreo-designer'); ?></h3>
          <?php if( have_rows('pro3') ): ?>
          <ul class="no-bullet pros--items">
          <?php  while ( have_rows('pro3') ) : the_row(); ?>

            <li class="pros--item">
              <svg class="icon-check"><use xlink:href="#icon-check"></use></svg>
              <?php the_sub_field('item'); ?>
            </li>

          <?php  endwhile; ?>
          </ul>
          <?php endif; ?>
        </li>
        <li class="columns large-3 medium-6 pros--secteur scrollreveal">
          <svg class="pros--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
            <circle class="bg" opacity=".2" cx="50" cy="50" r="50"/>
            <circle class="bg" opacity=".6" cx="50" cy="50" r="44"/>
            <circle class="bg" cx="50" cy="50" r="40"/>
            <path d="M75 64.4L63.3 29.9c-.1-.4-.5-.6-.9-.6s-.7.3-.9.6L56 46.3c-2.4-2.8-5.9-4.6-9.9-4.6-7.1 0-12.9 5.8-12.9 12.9 0 6.8 5.3 12.4 12 12.8v7.4c0 .5.4.9.9.9s.9-.4.9-.9v-7.4c2.1-.1 4-.8 5.7-1.8h9v9.2c0 .5.4.9.9.9s.9-.4.9-.9v-9.2h10.4c.3 0 .6-.1.7-.4.4-.2.4-.5.4-.8m-27.9-2.1l2.5-2.5c.4-.4.4-.9 0-1.3s-.9-.4-1.3 0l-2.1 2.1-2.1-2.1c-.4-.4-.9-.4-1.3 0s-.4.9 0 1.3l2.5 2.5v3.3c-5.7-.5-10.1-5.2-10.1-11 0-6.1 5-11 11-11 4 0 7.5 2.2 9.5 5.4l.9 1.8c0 .1.1.2.1.3.1.2.1.3.2.5s.1.4.2.6c0 .2.1.3.1.5s.1.5.1.7v1.3c0 .4 0 .9-.1 1.3 0 .1 0 .3-.1.4 0 .3-.1.6-.2.9 0 .2-.1.3-.1.5-.1.3-.2.5-.3.8-.1.1-.1.3-.2.4-.2.4-.3.7-.5 1.1-.1.1-.1.2-.2.3-.2.3-.3.5-.5.7-.1.1-.2.2-.3.4-.2.2-.4.5-.6.7-.1.1-.2.2-.2.3-.6.6-1.3 1.2-2.1 1.7-1.5.9-3.2 1.5-5 1.7l.2-3.6zm16.6 1.5v-1.5l2.5-2.5c.4-.4.4-.9 0-1.3s-.9-.4-1.3 0l-2.1 2.1-2.1-2.1c-.4-.4-.9-.4-1.3 0s-.4.9 0 1.3l2.5 2.5v1.5h-6.6l.5-.5c.1-.2.3-.3.4-.5l.2-.2c1.5-1.9 2.5-4.2 2.7-6.6v-.1c0-.4.1-.9.1-1.3s0-.8-.1-1.1v-.3c0-.3-.1-.7-.2-1 0-.1-.1-.2-.1-.4-.1-.2-.1-.4-.2-.7 0-.2-.1-.3-.2-.5s-.1-.4-.2-.6c-.1-.3-.2-.6-.4-.8-.1-.1-.1-.3-.2-.4l-.3-.6v-.1L62.4 33l10.4 30.7-9.1.1zM43.4 33.1c0-1.8-1.2-3.2-2.8-3.5-.4-3.9-3.1-5.3-5.7-5.3-3.5 0-5.4 2.1-6.1 3.1-2.2.3-3.8 2.3-3.8 4.7 0 2.6 2 4.7 4.4 4.7h10.7c1.8-.1 3.3-1.7 3.3-3.7m-16.6-1.2c0-1.6 1.1-2.9 2.5-2.9.3 0 .7-.2.8-.5.1-.1 1.4-2.5 4.7-2.5 1.5 0 3.9.6 3.9 4.4 0 .5.4.9.9.9h.3c.8 0 1.5.8 1.5 1.7 0 1-.7 1.7-1.5 1.7H29.4c-1.4.1-2.6-1.2-2.6-2.8" fill="#FFF"/>
          </svg>
          <h3 class="pros--title"><?php echo __('Agencement extérieur', 'cedreo-designer'); ?></h3>
          <?php if( have_rows('pro4') ): ?>
          <ul class="no-bullet pros--items">
          <?php  while ( have_rows('pro4') ) : the_row(); ?>

            <li class="pros--item">
              <svg class="icon-check"><use xlink:href="#icon-check"></use></svg>
              <?php the_sub_field('item'); ?>

            </li>

          <?php  endwhile; ?>
          </ul>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>

  <div class="section feature">
    <a name="f1" id="f1" class="anchor"></a>
    <div class="feature--wrapper">
      <div class="feature--column"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-dessiner.png" alt="<?php echo __('Dessiner', 'cedreo-designer'); ?>"></div>
      <div class="feature--column">
        <h2 class="section--title">
          <svg class="picto--title" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.2 55.3">
            <path d="M52.6 2.6c-3.5-3.5-9.2-3.5-12.7 0L3.8 38.7v.1s0 .1-.1.1c-.1.1-.1.2-.1.2v.1L0 54v.2c0 .1 0 .2.1.3v.1c0 .1.1.2.2.3.1.1.2.2.3.2.1 0 .2.1.4.1h.2l14.9-3.5h.2c.1 0 .1-.1.2-.1l.1-.1 36.1-36.1c3.4-3.5 3.4-9.3-.1-12.8M51.2 4c2.5 2.5 2.7 6.4.7 9.1l-9.8-9.8c2.7-2 6.6-1.7 9.1.7m-4.9 14.9L36.4 9l1.4-1.4 9.9 9.9-1.4 1.4zM5 50.3c-.4-.4-1-.4-1.4 0l-.8.7 2.6-10.7 4.4-.5-.6 5.1v.5c0 .1.1.1.1.2l.1.1c0 .1.1.1.2.1l.1.1c.1 0 .1 0 .2.1h.3l5.1-.6-.5 4.4-10.6 2.7.8-.8c.4-.4.4-1 0-1.4m12.5-5.5l22.4-22.4c.4-.4.4-1 0-1.4s-1-.4-1.4 0L16.1 43.4l-4.8.5.5-4.8 22.4-22.4c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0L10.4 37.7l-3.2.4 27.7-27.7 9.9 9.9L17.2 48l.3-3.2zm31.6-28.7l-9.9-9.9 1.4-1.4 9.9 9.9-1.4 1.4z"/></svg>
          <span><?php the_field('f1_title'); ?></span>
        </h2>
        <div class="text-justify scrollreveal">
          <?php the_field('f1_contenu'); ?>
        </div>
        <p class="text-right"><a href="<?php the_field('f1_link'); ?>"><?php echo __('Accéder', 'cedreo-designer'); ?></a></p>
      </div>
    </div>
  </div>

  <div class="section feature">
    <a name="f2" id="f2" class="anchor"></a>
    <div class="feature--wrapper">
      <div class="feature--column"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-amenager.png" alt="Aménager"></div>
      <div class="feature--column">
        <h2 class="section--title">
        <svg class="picto--title" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 39">
          <path d="M59.9 24.3l-2-7.8c-.2-.8-.8-1.3-1.6-1.4L52 12.4V5.2C52 2.4 49.6 0 46.8 0H34.3C32.5 0 31 .9 30 2.2 29 .9 27.5 0 25.8 0H13.3C10.4 0 8 2.4 8 5.3v7.2l-4.4 2.6c-.8.1-1.4.7-1.6 1.4l-2 7.8c-.1.5-.1 1 0 1.4l2 7.8c.3.9 1.1 1.5 2 1.5h2v4h2.4l4-4h35.2l4 4H54v-4h2c.9 0 1.7-.6 1.9-1.5l2-7.8c.1-.5.1-.9 0-1.4m-5.8-7.8l-1.6 6.3-1.1-1.4-1.2-1.5.3-1.1 1.2-4.1 2.6 1.6c-.1-.1-.2 0-.2.2M11.5 21h37l2.4 3H9.1l2.4-3zM34.3 2h12.5C48.5 2 50 3.5 50 5.3v7.6L48.2 19H31V5.3C31 3.4 32.5 2 34.3 2M10 5.3C10 3.5 11.5 2 13.3 2h12.5C27.5 2 29 3.4 29 5.2V19H11.8L10 12.9V5.3zm-1.6 9.2l1.5 5.2-2.4 3-1.6-6.3c0-.1-.1-.3-.1-.4l2.6-1.5zM4 33l-2-7.8v-.4L4 17l2 7.8V33H4zm4 3.6V35h1.6L8 36.6zm6.4-3.6H8v-7h44v7H14.4zM52 36.6L50.4 35H52v1.6zm6-11.4L56 33h-2v-8.2l2-7.8 2 7.8v.4"/></svg>
          <span><?php the_field('f2_title'); ?></span>
        </h2>
        <div class="text-justify scrollreveal">
          <?php the_field('f2_contenu'); ?>
        </div>
        <p class="text-right"><a href="<?php the_field('f2_link'); ?>"><?php echo __('Accéder', 'cedreo-designer'); ?></a></p>
      </div>
    </div>
  </div>

  <div class="section feature">
    <a name="f3" id="f3" class="anchor"></a>
    <div class="feature--wrapper">
      <div class="feature--column"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-valoriser.png" alt="Aménager"></div>
      <div class="feature--column">
        <h2 class="section--title">
          <svg class="picto--title" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 55">
            <path d="M59 53V14H47v39h-3V22H32v31h-3V30H17v23h-3V39H2v14H1c-.6 0-1 .4-1 1s.4 1 1 1h58c.6 0 1-.4 1-1s-.4-1-1-1M4 41h8v12H4V41zm15-9h8v21h-8V32zm15-8h8v29h-8V24zm15-8h8v37h-8V16zM8 25.3c.2 0 .3 0 .5-.1L44.8 4.3l-2.3 5c-.2.5 0 1.1.5 1.3.1.1.3.1.4.1.4 0 .7-.2.9-.6l3.6-7.8v-1l-.1-.1s0-.1-.1-.1l-.1-.1-.1-.1s-.1 0-.1-.1H47L38.5 0c-.6-.1-1 .3-1.1.9-.1.5.3 1 .9 1.1l5.5.5-36.3 21c-.5.3-.6.9-.4 1.4.2.3.6.4.9.4"/></svg>
          <span><?php the_field('f3_title'); ?></span>
        </h2>
        <div class="text-justify scrollreveal">
          <?php the_field('f3_contenu'); ?>
        </div>
        <p class="text-right"><a href="<?php the_field('f3_link'); ?>"><?php echo __('Accéder', 'cedreo-designer'); ?></a></p>
      </div>
    </div>
  </div>

   <section class="section home-galerie">
    <div class="row column">
      <h2 class="section--title scrollreveal"><span><?php echo __('Galerie', 'cedreo-designer'); ?></span></h2>
      <?php
      // the query
      $pageGallery = new WP_Query( array('page_id' => 9 ) ); ?>

      <?php if ( $pageGallery->have_posts() ) : ?>

        <!-- pagination here -->

        <!-- the loop -->
        <?php while ( $pageGallery->have_posts() ) : $pageGallery->the_post(); ?>
          <div class="text-center"><?php the_excerpt(); ?></div>
        <?php endwhile; ?>
        <!-- end of the loop -->

        <!-- pagination here -->

        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

      <?php
      // the query
      $gallery = new WP_Query( array('post_type' => 'imgallery', 'posts_per_page' => 3 ) ); ?>

      <?php if ( $gallery->have_posts() ) : ?>

        <!-- pagination here -->
        <ul class="row no-bullet">

        <!-- the loop -->
        <?php while ( $gallery->have_posts() ) : $gallery->the_post(); ?>
          <?php $image = get_field('image'); ?>
          <li class="columns large-4"><img class="gallery--item--thumb" src="<?php echo $image['sizes']['gallery']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
        <?php endwhile; ?>
        <!-- end of the loop -->

        <!-- pagination here -->
        </ul>

        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

      <p class="text-center"><a href="<?php the_permalink( 9 ); ?>" class="button large hollow white"><?php echo __('Voir la galerie', 'cedreo-designer'); ?></a></p>
    </div>
  </section>

<?php endwhile; ?>
