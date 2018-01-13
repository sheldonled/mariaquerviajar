<?php get_header(); ?>
<section class="site-body wrap">
  <section class="content-area ">
  <?php
  if(have_posts()) : while(have_posts()) : the_post();
  ?>
    <article id="post-<?php the_ID() ?>" class="wrap">
      <header class="post-header">
        <h2 class="post-title">
          <a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink para %s', 'mariaquerviajar'), the_title_attribute('echo=0') ) ?>" rel="bookmark"  aria-label="Título do Post">
            <?php the_title() ?>
          </a>
        </h2>
      </header>
      <section class="post-content">
        <?php the_content( __( 'Leia Mais <span class="meta-nav">&raquo;</span>', 'mariaquerviajar' ) ) ?>
      </section>
      <section class="post-meta">
        <span class="cat-links">
            <?php printf( get_the_category_list(', ') ) ?>
        </span>
        <span class="pub-date">
          <?php
            unset($previousday);
            printf( __( '%1$s &#8211; %2$s', 'mariaquerviajar' ), the_date( '', '', '', false ), get_the_time('H:i') )
          ?>
        </span>
        <?php
          the_tags( __( '<span class="tag-links">Tagged ', 'mariaquerviajar' ), ", ", "</span>" );
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        ?>
      </section>
    </article>
  <?php
  endwhile;
  else:
  ?>
    <article <?php post_class(); ?>>
      <header class="post-header">
        <h2 class="post-title">
          Sem Conteúdo
        </h2>
      </header>
      <section class="post-content">
        <p>Nenhum conteúdo encontrado</p>
      </section>
    </article>
  <?php
  endif;
  ?>
  </section>
  <aside class="sidebar">
    <?php get_sidebar(); ?>
  </aside>
</section>
<?php get_footer(); ?>