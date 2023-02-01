<?php
/*
*Created by Sofia Widholm. 
*Webbdesign för CMS, Webbutveckling, Mittuniversitetet.
*Last update 2022-08-11
*/

// Template Name: Aktiviteter

// Inclusion of header
get_header();
?>

<!-- Main content -->
<main>

  <?php
  // Loop that prints the page with title and text
  if (have_posts()) {
    while (have_posts()) {
      the_post();
  ?>
      <h1><?php the_title(); ?></h1>
      <section class="small-width">
        <?php the_content(); ?>
      </section>
  <?php
    }
  }
  ?>

  <section class="wide-width grid">
    <?php

    // Query for posts with the category of Aktiviteter
    query_posts('category_name=aktiviteter&posts_per_page=100');

    // Loop that prints the posts with picture and title
    if (have_posts()) {
      while (have_posts()) {
        the_post();
    ?>
        <a href="<?php the_permalink(); ?>" class="card flex-item-mini">
          <div>
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail();
            } ?>
          </div>
          <section>
            <h2><?php the_title(); ?></h2>
          </section>
        </a>
    <?php
      }
    }
    ?>
  </section>
</main>

<?php
//Inclusion of footer
get_footer();
?>