<?php get_header(); ?>
<section class="site-body wrap">
  <section class="content-area grid">
    <?php
    if(have_posts()) : while(have_posts()) : the_post();
    ?>
      <article id="post-<?php the_ID() ?>" class="post">
        <a href="<?php the_permalink() ?>" title="<?php printf( the_title_attribute('echo=0')  ) ?>" rel="bookmark" class="post-thumbnail" aria-label="Título do Post">
          <div class="post-thumbnail--loading"></div>
          <?php
            $img_src = get_the_post_thumbnail_url(get_the_ID(), ["300","300"]);
            echo "<img data-src='".$img_src."' alt='".get_the_title()."'>";
          ?>
          <span class="post-title"><?php the_title() ?></span>
        </a>
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
              printf( __( '%1$s', 'mariaquerviajar' ), the_date( '', '', '', false ) )
            ?>
          </span>
          <?php
            the_tags( __( '<span class="tag-links">Tagged ', 'mariaquerviajar' ), ", ", "</span>" )
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