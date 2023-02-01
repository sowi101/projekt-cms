<?php
/*
*Created by Sofia Widholm. 
*Webbdesign för CMS, Webbutveckling, Mittuniversitetet.
*Last update 2022-08-17
*/

// Template Name: Nyheter

// Inclusion of header
get_header();
?>

<!-- Main content -->
<main class="news">

  <?php
  // Loop that prints the page's title and content
  if (have_posts()) {
    while (have_posts()) {
      the_post();
  ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    <?php
    }
  }

  // Query for posts with the category of Nyheter
  query_posts('category_name=nyheter&posts_per_page=100');

  // Loop that prints the posts with title, date, excerpt, link and picture
  if (have_posts()) {
    while (have_posts()) {
      the_post();
    ?>
      <article class="small-width flex">
        <div class="text">
          <h2><?php the_title(); ?></h2>
          <p class="date"><?php the_date(); ?></p>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="basic-button">Läs mer</a>
        </div>
        <div class="picture">
          <?php if (has_post_thumbnail()) {
            the_post_thumbnail();
          } ?>
        </div>
      </article>
  <?php
    }
  }
  ?>
</main>

<?php
//Inclusion of footer
get_footer();
?>