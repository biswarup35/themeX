<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ThemeX</title>
    <?php wp_head(); ?>
</head>
    <body <?php body_class();?>>
         <?php wp_body_open();?>
         <div class="container" role="root">
             <header id="masthead" class="site-header">
                 <div class="site-branding">
                     <p class="site-title">
                         <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home-url"> 
                              <?php bloginfo( 'name' ) ?>
                         </a>
                     </p>
                     <p class="site-description">
                         <?php bloginfo( 'description' ); ?>
                     </p>      
                 </div>
             </header>
             <nav role="site-navigation">
                 <div class="nav-container">
                     <div class="logo">
                          <p>Logo</p>
                     </div>

                     <?php
                   $args = [
                    'theme_location'     => 'main-menu',
                    'container'       => 'div',
                    'container_class' => 'sidebar-navigation',
                    'container_id'    => '',
                    'menu_class'      => 'side-menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'item_spacing'    => 'preserve',
                    'depth'           => 0,
                   ];
                wp_nav_menu( $args ); ?>     
                 </div>
             </nav>