<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php get_template_part( 'template-parts/meta' ); ?>
</head>
<body>
  <header class="site-header">
    <div class="top-bar">
      <div class="wrap">
        <?php get_template_part( 'template-parts/logo' ); ?>
        <?php get_template_part( 'template-parts/social' ); ?>
        <button type="button" class="menu-mobile icon__navicon" aria-label="Menu Mobile"></button>
      </div>
    </div>
    <?php get_template_part( 'template-parts/navigation', 'top' ); ?>
  </header>