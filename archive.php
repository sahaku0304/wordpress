<?php get_header(); ?>

<main class="">
  <?php
  if (is_post_type_archive('news')) {
    get_template_part('archives/news');
  }
  else {
    get_template_part('archives/archive');
  } ?>


</main>



<?php get_footer(); ?>