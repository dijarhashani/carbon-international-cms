<?php 

include  dirname(__FILE__, 4) . '/backend/config/settings.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/public/assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/public/assets/css/style.css">
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>/public/assets/images/favicon.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title><?php echo $page_title; ?></title>
</head>
<body>
<div id="smooth-wrapper">
<div id="smooth-content">
    
<header>
    <a href="<?php echo BASE_URL;?>">
        <div class="logo">
            <img src="<?php echo BASE_URL; ?>/public/assets/images/logo.png" alt="">
        </div>
    </a>
    <div class="all_menu">
        <div class="menu">
            <ul>
                <li><a class="<?php echo ($current_page == 'home') ? 'menu-active-page' : ''; ?>" href="<?php echo BASE_URL; ?>">home</a></li>
                <li><a class="<?php echo ($current_page == 'about') ? 'menu-active-page' : ''; ?>" href="<?php echo BASE_URL; ?>/about">about us</a></li>
                <li><a class="<?php echo ($current_page == 'projects') ? 'menu-active-page' : ''; ?>" href="<?php echo BASE_URL; ?>/projects">projects</a></li>
            </ul>
        </div>
        <div class="submenu">
        <div class="burger">
            <div class="__line"></div>
            <div class="__line-middle">
                <div></div>
                <div></div>
            </div>
            <div class="__line"></div>
        </div>

        

        </div>
    </div>

    
</header>

        <div class="__menu">
            <ul>
               <a href="#contact-us"> <li>contact us</li></a>
               <a href="<?php echo BASE_URL; ?>/start-a-project"><li>start a project</li></a>
               <a href="<?php echo BASE_URL; ?>/login"><li>login</li></a>
            </ul>
            <div class="m__line"></div>
            <div class="socials">
                <div class="ig"><a target="_blank" href="https://www.instagram.com/carboninternational/"><img src="<?php echo BASE_URL; ?>/public/assets/images/ig.png" alt=""></a></div>
                <div class="fb"><a target="_blank" href="https://www.instagram.com/carboninternational/"><img src="<?php echo BASE_URL; ?>/public/assets/images/fb.png" alt=""></a></div>
                <div class="in"><a target="_blank" href="https://www.linkedin.com/company/carboninternational"><img src="<?php echo BASE_URL; ?>/public/assets/images/lk.png" alt=""></a></div>
            </div>
        </div>