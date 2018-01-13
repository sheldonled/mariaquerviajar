<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="search-field" placeholder="O que você procura?" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" />
	<button type="submit" class="search-submit icon__search" aria-label="Botão de busca"></button>
</form>
