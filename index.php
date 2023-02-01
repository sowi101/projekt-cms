<?php
/*
*Created by Sofia Widholm. 
*Webbdesign för CMS, Webbutveckling, Mittuniversitetet.
*Last update 2022-08-11
*/

// Inclusion of header
get_header();
?>

<!-- Main content -->
<main class="small-width">
  <?php
  // Loop that prints the page's title and content
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      ?>
      <h1><?= the_title(); ?></h1>
      <?php
      the_content();
    }
  }
  ?>
</main>

<?php
//Inclusion of footer
get_footer();
?>