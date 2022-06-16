<!DOCTYPE html>
<html <?php language_attributes();?> prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <meta property='og:title' content="<?php bloginfo('name');?>">
  <meta property='og:type' content='website'>
  <meta property='og:description' content='<?php bloginfo('description');?>'>
  <meta property='og:url' content='URLが入る'><!--サーバアップしたらurl記入する-->
  <meta property="og:image" content="img/ogp.png">
  <meta name="description" content="<?php bloginfo('description');?>"/>
  <title><?php
      if(is_front_page()) : 
        bloginfo('name');
      elseif(is_home()) :   
        wp_title('|', true, 'right');
        bloginfo('name');
      elseif(is_single()) : 
        wp_title('|', true, 'right');
        bloginfo('name');
      // elseif(is_page()) : 
      //   wp_title('|', true, 'right');
      //   bloginfo('name');
      // elseif(is_archive()) : 
      //   wp_title('|', true, 'right');
      //   bloginfo('name');
      // elseif(is_search()) : 
      //   wp_title('|', true, 'right');
      //   bloginfo('name');
      // elseif(is_404()): 
      //   echo '404|';
      //   bloginfo('name');
      endif;
      if($paged >= 2 || $page >= 2) : //２ページ目以降の場合
        echo '-' . sprintf('%sページ',
        max($paged,$page));
      endif;
      ?>
  </title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicon.png" />
  <link rel=”canonical” href=”サーバーアップしたらURL入れる” />
  <?php wp_head();?>
</head>

<body <?php body_class();?>>
  <?php wp_body_open();?>

  <div class="wrapper">

    <!-- header -->
    <header class="l-header ">
      <div class="p-header">
        <h1 class="p-header__logo">
          <a href="<?php echo esc_url(home_url('/'));?>">KYON'S PORTOFOLIO</a>
        </h1>
        <nav class="p-header__nav">
          <ul class="p-header__nav__list">
            <li class="p-header__nav__list__item"><a href="<?php echo esc_url(home_url('/'));?>#works">WORKS</a></li>
            <li class="p-header__nav__list__item"><a href="<?php echo esc_url(home_url('/'));?>#skill">SKILL</a></li>
            <li class="p-header__nav__list__item"><a href="<?php echo esc_url(home_url('/'));?>#about">ABOUT</a></li>
            <li class="p-header__nav__list__item"><a href="<?php echo home_url('/contact'); ?>">CONTACT</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- /header -->