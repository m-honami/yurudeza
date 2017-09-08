<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
    <meta charset="utf-8">
    <title><?php wp_title(''); ?></title>
    
    <?php // force Internet Explorer to use the latest rendering engine available ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php // mobile meta (hooray!) ?>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/index.css" type="text/css" />

    <!--[if IE]>
    	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->
    <?php // or, set /favicon.ico for IE10 win ?>
    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
    <meta name="theme-color" content="#121212">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <?php // wordpress head functions ?>
    <?php wp_head(); ?>
    <?php // end of wordpress head ?>

    <?php // drop Google Analytics Here ?>
    <?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <div id="container">

      
      <?php if ( is_home() || is_front_page() ) : ?>
      <h1 class="header" role="banner">
        <a class="header-logo" href="<?php echo home_url() ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="ユルデザ" class="header-logo-img">
        </a>
      </h1>
      <div id="menu">
        <ul>
         <li><a href="http://yurudeza.com/category/design/">デザイン</a></li>
         <li><a href="http://yurudeza.com/category/life/">暮らし</a></li>
         <li><a href="http://yurudeza.com/category/trip/">旅行</a></li>
         <li><a href="http://yurudeza.com/category/monologue/">ひとりごと</a></li>
        </ul>
      </div>
<?php else : ?>
      <p class="header" role="banner" itemscope itemtype="リンクが入る">
        <a class="header-logo" href="<?php echo home_url() ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="ユルデザ" class="header-logo-img">
        </a>
        <div id="menu">
          <ul>
           <li><a href="http://yurudeza.com/category/design/">デザイン</a></li>
           <li><a href="http://yurudeza.com/category/life/">暮らし</a></li>
           <li><a href="http://yurudeza.com/category/trip/">旅行</a></li>
           <li><a href="http://yurudeza.com/category/monologue/">ひとりごと</a></li>
          </ul>
        </div>
      </p>
<?php endif; ?>

     
     
<!--    	<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

        <div id="inner-header" class="wrap cf">

        	<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
        	<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

        	<?php // if you'd like to use the site description you can un-comment it below ?>
        	<?php // bloginfo('description'); ?>


        	<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
            <?php wp_nav_menu(array(
            	         'container' => false,                           // remove nav container
            	         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
            	         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
            	         'menu_class' => 'nav top-nav cf',               // adding custom nav class
            	         'theme_location' => 'main-nav',                 // where it's located in the theme
            	         'before' => '',                                 // before the menu
            	               'after' => '',                                  // after the menu
            	               'link_before' => '',                            // before each link
            	               'link_after' => '',                             // after each link
            	               'depth' => 0,                                   // limit the depth of the nav
            	         'fallback_cb' => ''                             // fallback function (if there is one)
            )); ?>

        	</nav>

        </div>

    	</header>
-->