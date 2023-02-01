<?php
/*
*Created by Sofia Widholm. 
*Webbdesign för CMS, Webbutveckling, Mittuniversitetet.
*Last update 2022-08-16
*/

// Template Name: Våra rum

// Inclusion of header
get_header();
?>

<!-- Main content -->
<main class="rooms">
  <?php
  // Loop that prints the page's title and content
  if (have_posts()) {
    while (have_posts()) {
      the_post();
  ?>
      <h1><?php the_title(); ?></h1>
      <section class="small-width"><?php the_content(); ?></section>
    <?php
    }
  }

  // Query for posts with the category of Rum
  query_posts('category_name=Rum&posts_per_page=100');

  // Loop that prints the posts with picture, title, excerpt and link
  if (have_posts()) {
    while (have_posts()) {
      the_post();
    ?>
      <article class="small-width flex">
        <div class="info">
          <h2><?php the_title(); ?></h2>
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