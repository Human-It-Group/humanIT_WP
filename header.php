<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8" />
    <title>landing page</title>
    <link rel="stylesheet" href= "style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  </head>
  <body>
  <header>
    <div class= "header">
      <a href="Index.html">
        <div class="logo_main"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/humanit_lable.svg" alt="image"></div>
     </a>
      <div class="slogan_main">
          <h1 class="slogan_main_text"><strong><?php echo get_theme_mod('top_slogan'); ?></strong></br> <?php echo get_theme_mod('top_slogan_orange'); ?></h1>
      </div>
      <div class="img_comp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/web_page_comp.svg" alt=""></div>
      <div class="line_right_first"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/line.svg" alt=""></div>
      <div class="squere"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/web_page_square.png" alt=""></div>
    </div>
  </header>