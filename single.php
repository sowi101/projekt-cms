<?php
/*
*Created by Sofia Widholm. 
*Webbdesign för CMS, Webbutveckling, Mittuniversitetet.
*Last update 2022-08-18
*/

// Inclusion of header
get_header();
?>

<!-- Main content -->
<main class="small-width">
  <?php
  // Loop that prints the post's title and content
  if (have_posts()) {
    while (have_posts()) {
      the_post();
  ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
  <?php
    }
  }
  ?>
</main>

<?php
//Inclusion of footer
get_footer();
?>