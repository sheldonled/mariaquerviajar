<?php
  /**
   * Array of widgets
   * 0 - Photo of Maria
   * 1 - Main Description
   * 2 - Secondary Description
   * 3 - YouTube video ID
   */
  $widgets = get_widget_data('sidebar');
  $secondary_desc = $widgets[2];
?>
<footer class="site-footer">
  <div class="wrap">
    <section class="footer__logo">
      <?php get_template_part( 'template-parts/logo' ); ?>
    </section>
    <section class="about-description">
      <?php echo $secondary_desc->content; ?>
    </section>
    <section class="footer__social">
      <?php get_template_part( 'template-parts/social' ); ?>
    </section>
    <section class="logo-sheldonled">
      <a href="http://sheldonled.com" target="_blank" class="icon__sheldonled" aria-label="Site do Desenvolvedor" ></a>
    </section>
  </div>
</footer>
</body>
</html>
<!-- SCRIPTS Go here -->
<script>
/* loadJS */
(function(w){var loadJS=function(src,cb){"use strict";var ref=w.document.querySelector("script");var script=w.document.createElement("script");script.src=src;script.async=true;ref.parentNode.insertBefore(script,ref);if(cb&&typeof cb==="function"){script.onload=cb}return script};w.loadJS=loadJS})(window);
/* load Script */
loadJS("<?php echo get_template_directory_uri(); ?>/dist/js/app.min.js?030720201139", function() {
  mqv.init();
});
/* load Google Analytics */
loadJS("https://www.googletagmanager.com/gtag/js?id=UA-112399752-1", function() {
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-112399752-1');
});
/* load Facebook API */
loadJS("https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12", function() {
  var fbWarn = document.querySelector(".js-facebook-warn");
  if(!fbWarn) return;
  fbWarn.parentNode.removeChild(fbWarn);
});
</script>
