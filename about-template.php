<?php
/*
*Created by Sofia Widholm. 
*Webbdesign för CMS, Webbutveckling, Mittuniversitetet.
*Last update 2022-08-17
*/

// Template Name: Om oss

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

  <!-- Information about the different managers -->
  <section class="wide-width about-grid">
    <?php
    // Query for posts with the category of Personal
    query_posts('category_name=personal&posts_per_page=100');

    // Loop that prints the posts with picture, title and content
    if (have_posts()) {
      while (have_posts()) {
        the_post();
    ?>
        <div class="card flex-item-mini">
          <div>
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail();
            } ?>
          </div>
          <section>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </section>
        </div>

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