<nav class="main-navigation" role="navigation" aria-label="Menu Principal">
	<ul class="wrap menu">
    <?php
      $items = wp_get_nav_menu_items( "top_menu", [
        'order'                  => 'ASC',
        'orderby'                => 'menu_order',
        'post_type'              => 'nav_menu_item',
        'post_status'            => 'publish',
        'nopaging'               => true,
        'update_post_term_cache' => false
      ]);
      foreach ($items as $item) {
        echo "<li class='menu-item__".sanitize_title($item->title)."'>
          <a href='".$item->url."' title='".$item->description."'  aria-label='Menu Item: ".$item->description."'>"
            .$item->title.
          "</a>
        </li>";
      }
    ?>
  </ul>
  
  <?php get_template_part( 'template-parts/social' ); ?>
  <?php get_search_form(); ?>
</nav>
