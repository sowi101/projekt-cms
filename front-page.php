<?php
/*
*Created by Sofia Widholm. 
*Webbdesign för CMS, Webbutveckling, Mittuniversitetet.
*Last update 2022-08-13
*/

// Inclusion of header
get_header();
?>

<!-- Main content -->
<main>
  <?php
  // Loop that prints the page's title and content
  if (have_posts()) {
    while (have_posts()) {
      the_post();
  ?>
      <h1><?= the_title(); ?></h1>
      <section class="small-width">
        <?= the_content(); ?>
      </section>

  <?php
    }
  }
  ?>

  <!-- Static links to important pages -->
  <section class="color-block">
    <div class="flex">
      <a href="<?= get_site_url() ?>/vara-rum">
        <img src="<?= get_template_directory_uri() ?>/images/enkelrum_kvadrat.jpg" alt="Enkelrum med en säng" />
        <h2>Våra rum</h2>
      </a>
      <a href="<?= get_site_url() ?>/aktiviteter">
        <img src="<?= get_template_directory_uri() ?>/images/vandring_kvadrat.jpg" alt="Människor på vandring" />
        <h2>Aktiviteter</h2>
      </a>
      <a href="<?= get_site_url() ?>/kontakt">
        <img src="<?= get_template_directory_uri() ?>/images/telefon_kvadrat.jpg" alt="Telefon" />
        <h2>Kontakt</h2>
      </a>
    </div>
  </section>

  <!-- Dynamic widget area -->
  <section class="small-width">
      <?php if (is_active_sidebar('widget-frontpage')) {
      ?>
        <div id="widget-frontpage">
          <?php dynamic_sidebar('widget-frontpage'); ?>
        </div>
      <?php
      }
      ?>
  </section>
</main>

<?php
//Inclusion of footer
get_footer();
?>