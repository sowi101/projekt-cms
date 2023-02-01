<?php
/*
*Created by Sofia Widholm. 
*Webbdesign för CMS, Webbutveckling, Mittuniversitetet.
*Last update 2022-08-17
*/
?>

<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Print site name to browser title -->
  <title><?php wp_title(); ?></title>
  <?php
  // Inclusion of hook to print inforamtion in head element
  wp_head();
  ?>
</head>

<body>
  <header>
    <div>
      <!-- Dynamic logotype -->
      <?php if (function_exists('the_custom_logo')) {
        the_custom_logo();
      }
      ?>

      <!-- Mobile navigation toogle -->
      <button class="mobile-nav-toggle" aria-controls="menu-primary" aria-expanded="false">
        <span class="sr-only">Meny</span>
        <span class="sr-only">Öppna</span>
        <span class="fas fa-bars open" aria-hidden="true"></span>
        <span class="sr-only">Stäng</span>
        <span class="fas fa-times close" aria-hidden="true"></span>
      </button>

      <!-- Dynamic main navigation -->
      <nav>
        <?php wp_nav_menu(array("theme_location" => "main-nav")) ?>
      </nav>
    </div>

    <!-- Dynamic header image -->
    <img src="<?php header_image(); ?>" alt="">
  </header>