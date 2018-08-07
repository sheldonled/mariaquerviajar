<?php
  $postUrl =  get_permalink();
  $encodedPostUrl =  urlencode($postUrl);
  $postTitle = str_replace( ' ', '%20', get_the_title());
  $postImg = get_the_post_thumbnail_url(get_the_ID(), ["300","300"]);

  $pinterestUrl = 'http://pinterest.com/pin/create/button/?url='.$encodedPostUrl.'&media='.$postImg.'&description='.$postTitle.'&via=mariaquerviajar';
  $twitterUrl = 'https://twitter.com/intent/tweet?text='.$postTitle.'&url='.$encodedPostUrl.'&via=mariaquerviajar';
  $facebookUrl = 'https://www.facebook.com/sharer/sharer.php?u='.$encodedPostUrl;
  $whatsappUrl = 'whatsapp://send?text='.$postTitle.' '.$encodedPostUrl;
?>


<section class="post-meta">
  <div class="pub-date">Publicado em: <?php echo get_the_date( 'j \d\e F \d\e Y' ); ?></div>
  <div class="post-share">
    <span class="share-text">Compartilhe</span>
    <a href="<?php echo $pinterestUrl;?>" target="_blank" class="icon__pinterest" aria-label="Compartilhe no Pinterest" aria-label="Compartilhe no Pinterest"></a>
    <a href="<?php echo $twitterUrl;?>"   target="_blank" class="icon__twitter"   aria-label="Compartilhe no Twitter"   aria-label="Compartilhe no Twitter"></a>
    <a href="<?php echo $facebookUrl;?>"  target="_blank" class="icon__facebook"  aria-label="Compartilhe no Facebook"  aria-label="Compartilhe no Facebook"></a>
    <a href="<?php echo $whatsappUrl;?>"  target="_blank" class="icon__whatsapp"  aria-label="Compartilhe no Whatsapp"  aria-label="Compartilhe no Whatsapp" data-action="share/whatsapp/share"></a>
    <a href="<?php echo $postUrl;?>"      target="_blank" class="icon__link js-copy-share-link" aria-label="Copie o link"></a>
  </div>
  <div class="cat-links">
    Categoria: <?php printf( get_the_category_list(', ') ) ?>
  </div>
</section>