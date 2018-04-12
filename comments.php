<?php
if ( post_password_required() ) {
	return;
}
?>

<section class="comments-area">
	<nav aria-label="Tipos de comentários">
		<ul class="comments__tabs">
			<li data-target="wp-comments" class="comments__tab comments__tab--open js-comment-tab" aria-label="Comentários">
				Comentários
			</li>
			<li data-target="fb-comments" class="comments__tab js-comment-tab" aria-label="Comentários no Facebook">
				Comente com Facebook
			</li>
		</ul>
	</nav>
	<section data-tab="wp-comments" class="comments__wp comments--open js-comments-container">
		<?php
		if ( have_comments() ) : ?>
			<h2 class="comments-title">
				<?php
				$comments_number = get_comments_number();
				if ( '1' === $comments_number ) {
					printf( _x( 'Um comentário em &ldquo;%s&rdquo;', 'comments title'), get_the_title() );
				} else {
					printf(
						_nx(
							'%1$s comentário em &ldquo;%2$s&rdquo;',
							'%1$s comentários em &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
				?>
			</h2>

			<ol class="comment-list">
				<?php
					wp_list_comments([
						"avatar_size" => 100,
						"style"       => "ul",
						"short_ping"  => true,
						"reply_text"  => "Responda este comentário",
					]);
				?>
			</ol>

			<?php the_comments_pagination([
				"prev_text" => "<span class='screen-reader-text'> Anterior </span>",
				"next_text" => "<span class='screen-reader-text'> Próximo </span>",
			]);

		endif; 
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

			<p class="no-comments">Esta página está fechada para comentários</p>
		<?php
		endif;

		comment_form([
			"title_reply" => "E aí, gostou? Deixe um comentário:",
			"id_form" => false,
			"comment_notes_before" => false,
			"comment_notes_after" => false,
			"id_submit" => false,
			"label_submit" => "Enviar",
			"comment_field" => "<label class='comment-form__comment' for='comment'><span>Comentário*:</span><textarea required id='comment' name='comment'></textarea></label>",
			"fields" => [
				"author" => "<label class='comment-form__author' for='author'><span>Nome*:</span><input required id='author' name='author' type='text' value='".esc_attr($commenter['comment_author'])."'  placeholder='Seu Nome Aqui'></label>",
				"email" => "<label  class='comment-form__email' for='email'><span>E-mail*:</span><input required id='email' name='email' type='text' value='".esc_attr($commenter['comment_author_email'])."' placeholder='seu@email.com'></label>",
				"url" => "<label    class='comment-form__url' for='url'><span>Site:</span><input id='url' name='url' type='text' value='".esc_attr($commenter['comment_author_url'])."' placeholder='http://www.seusite.com'></label>"
			]
		]);
		?>
	</section>
	<section data-tab="fb-comments" class="comments__fb js-comments-container">
		<div class="js-facebook-warn">
			Houve algum erro ao carregar o plugin do Facebook =/
		</div>
		<fb:comments href="<?php the_permalink(); ?>" data-numposts="10" data-width="100%"></fb:comments>
	</section>
</div><!-- #comments -->
