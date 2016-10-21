<?php
  $sharing_title = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
  $sharing_excerpt = htmlspecialchars(urlencode(html_entity_decode(get_the_excerpt(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
?>
<div class="share--buttons">
  <a class="button small secondary" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><svg class="icon-facebook"><use xlink:href="#icon-facebook"></use> </svg> facebook</a>
  <a class="button small secondary" href="https://twitter.com/home?status=<?php echo $sharing_title; the_permalink(); ?>"><svg class="icon-twitter"><use xlink:href="#icon-twitter"></use></svg> twitter</a>
  <a class="button small secondary" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php echo $sharing_title; ?>&summary=<?php echo $sharing_excerpt; ?>&source="><svg class="icon-linkedin"><use xlink:href="#icon-linkedin"></use></svg> linkedin</a>
  <?php if (has_post_thumbnail()): ?>

    <a class="button small secondary" href="https://pinterest.com/pin/create/button/?url=&media=<?php the_post_thumbnail_url('thumbnail'); ?>&description=<?php echo $sharing_title; ?>"><svg class="icon-pinterest"><use xlink:href="#icon-pinterest"></use></svg> pinterest</a>
  <?php endif ?>
</div>