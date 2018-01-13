<?php get_template_part( 'template-parts/navigation', 'top' );
  /**
   * Array of widgets
   * 0 - Photo of Maria
   * 1 - Main Description
   * 2 - Secondary Description
   * 3 - YouTube link to be embeded
   */
  $widgets = get_widget_data('sidebar');
  $img = $widgets[0];
  $description = $widgets[1];
  $ytLink = $widgets[3];
?>
<section class="about-photo">
  <img src="<?php echo $img->url; ?>" alt="<?php echo $img->alt; ?>">
</section>
<h3><?php echo $description->title; ?></h3>
<section class="about-description">
  <?php get_template_part( 'template-parts/social' ); ?>
  <?php echo $description->content; ?>
</section>
<h3><a href="https://bit.ly/youtubeMariaQuerViajar" target="_blank" class="sidebar__youtube--title"> YouTube <span class="icon__youtube"></span></h3>
<section class="sidebar__youtube--content">
  <iframe class="sidebar__youtube--video" src="<?php echo $ytLink->content; ?>" frameborder="0" allowfullscreen></iframe>
</section>
<section class="description">
  <h3><a href='https://instagram.com/mariaquerviajar' target='_blank'  aria-label="Instagram link" >Instagram</a></h3>
  <ul class="insta-feed">
  </ul>
</setion>