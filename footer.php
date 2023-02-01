<?php
/*
*Created by Sofia Widholm. 
*Webbdesign för CMS, Webbutveckling, Mittuniversitetet.
*Last update 2022-08-16
*/
?>

<!-- Footer with the company's logotype, adress and contact information -->
<footer>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logotype.svg" alt="Ånnaboda Vandrarhotells logotyp">
      <br />
      Ånnaboda 100, 719 41 Garphyttan<br />
      019 - 29 00 00<br />
      kontakt@annabodavandrarhotell.se
      <br />
      <br/>
      Fiktiv webbplats skapad av Sofia Widholm<br>
      Webbutveckling, Mittuniversitetet 2022
</footer>

<?php
// Inclusion of hook in which JavaScript can be printed
wp_footer();
?>

</body>

</html>