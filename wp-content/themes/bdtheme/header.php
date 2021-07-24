<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php wp_title(); ?></title>
<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	<!-- Place favicon.ico in the root directory -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127892889-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127892889-1');
</script>
<meta name="google-site-verification" content="KaZYWGuuqqUjZBJ_lmUf6_OKo0dMmbkAoUCURD0EL5s" />

<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/normalize.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bdanim.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<?php wp_head();?>
</head>
<body id="home">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->
<header>
  <div class="full-width-wrapper">
    <a href="<?php echo get_bloginfo( 'wpurl' );?>" id="logo" Alt="<?php echo get_bloginfo( 'name' ); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/light-logo.svg"></a>
    <nav>
      <?php wp_nav_menu(); ?>

    </nav>
  </div>
</header>
