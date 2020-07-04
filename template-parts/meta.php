<?php global $wp;
  /**
   * Array of widgets
   * 0 - Photo of Maria
   * 1 - Main Description
   * 2 - Secondary Description
   * 3 - YouTube video ID
   */
  $widgets = get_widget_data('sidebar');
  $sidebar_img = $widgets[0];

  $base = get_template_directory_uri();
  $home = esc_url( home_url( '/' ) );
  $url = home_url( $wp->request );
  $name = get_bloginfo('title');
  $title = trim(wp_title("",""));
  $title = ($title === "") ? $name : $name." - ".$title;
  $description = "Uma brasileira que mora em Dublin na Irlanda e compartilha os amores e dissabores de morar na Europa, assim como viagens e todas as descobertas desse novo mundo! 
  Esse blog é pra você que nunca se aventurou na Europa e também pra você que é super viajadão mas sempre tem algo a aprender e a ensinar!
  Vamos nos ajudando e assim evitando o lado negativo da vida para poder aproveitar mais as partes positivas!
  Conto com o seu apoio! Abraço apertado!";
  $ogImg = (is_single()) ? get_the_post_thumbnail_url(get_the_ID(), ["300","300"]) : $sidebar_img->url;
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="alternate" href="<?php echo $url; ?>" hreflang="x-default" />
<link rel="alternate" type="application/rss+xml" title="Maria quer viajar &raquo; Feed" href="<?php echo $home; ?>feed/" />
<link rel="manifest" href="<?php echo $base; ?>/config/manifest.json?030720201139">
<link rel="canonical" href="<?php echo $home; ?>" />

<meta name="theme-color" content="#FCD8DC">
<meta name="description" content="<?php echo $description;?>" />

<meta property="og:image" content="<?php echo $ogImg;?>" />
<meta property="og:locale" content="pt_BR" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $title;?>" />
<meta property="og:description" content="<?php echo $description;?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:site_name" content="<?php echo $name;?>" />

<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Viagens, fotografia, comida e curiosidades da vida na Europa" />
<meta name="twitter:title" content="Maria quer viajar" />
<meta name="twitter:site" content="@mariaquerviajar" />

<meta property="fb:pages" content="2014341615470598" />
<meta property="fb:app_id" content="546704832352432">
<meta property="og:title" content="<?php echo $title;?>"f/>
<meta property="og:type" content="article"/>
<meta property="og:site_name" content="<?php echo $name;?>"/>

<meta name="google-site-verification" content="uHvrYRlAaemYGYXyjlra-GH18vnnKSyBcsPDFQNwdKM" />


<!-- Icon -->
<link rel="shortcut icon" href="<?php echo $base; ?>/img/logo/mqv-36x36.png?030720201139" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo $base; ?>/dist/css/style.min.css?030720201139">

<meta name="application-name" content="<?php echo $name;?>">
<!-- iPhone -->
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="apple-touch-icon" href="<?php echo $base; ?>/img/logo/mqv-180x180.png?030720201139">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $base; ?>/img/logo/mqv-60x60.png?030720201139">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $base; ?>/img/logo/mqv-76x76.png?030720201139">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $base; ?>/img/logo/mqv-120x120.png?030720201139">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $base; ?>/img/logo/mqv-152x152.png?030720201139">


<link rel="preload" href="<?php echo $base; ?>/fonts/icons-mqv.ttf?030720201139" as="font" type="font/ttf">
<link rel="preload" href="<?php echo $base; ?>/img/mqv_logo_text.svg" as="image">
<title><?php echo $title;?></title>
