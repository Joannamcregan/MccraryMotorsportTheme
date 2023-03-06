<! DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset='<?php bloginfo('charset'); ?>'>
        <meta name = "viewport" content = "width=device-width", initial-scale=1>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <header>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>        
        <!-- <i class="fa fa-window-close" aria-hidden="true"></i> -->
        <!-- <div id="logo">
            <a href="<?php echo esc_url(site_url()) ?>"><span>McCrary <strong>Motorsports</strong></span></a>
        </div> -->
        <div id="menu">
            <a href="<?php echo esc_url(site_url('/about'));?>"><span>About</span></a>
            <a href="<?php echo esc_url(site_url('/services'));?>"><span>Services</span></a>
            <a href="<?php echo esc_url(site_url('/reviews'));?>"><span>Reviews</span></a>
            <a href="<?php echo esc_url(site_url('/contact'));?>"><span>Contact</span></a>
        </div>
    </header>

<div class="menu-overlay">
    <ul>
        <li><a href="<?php echo esc_url(site_url('/about'));?>">About</a></li>
        <li><a href="<?php echo esc_url(site_url('/services'));?>">Services</a></li>
        <li><a href="<?php echo esc_url(site_url('/reviews'));?>">Reviews</a></li>
        <li><a href="<?php echo esc_url(site_url('/contact'));?>">Contact</a></li>
    </ul>
</div>