<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q157WLMPQL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q157WLMPQL');
</script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMCVDT6C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="site-header">
    <div class="site-branding">
        <?php 
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            echo '<h1><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
            echo '<p>' . get_bloginfo('description') . '</p>';
        }
        ?>
    </div>

    <nav class="site-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container'      => '',
            'menu_class'     => 'main-menu',
        ));
        ?>

    
    </nav>
</header>

<div id="content" class="site-content lorem">
