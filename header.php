<?php 
/**
 * Header file.
 * 
 * @package Jackjone
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php wp_head();?>

</head>
<body <?php body_class();?>>

    <?php wp_body_open();?>

    <!-- start header section -->
    <header class="header">
        <div class="container">
            <div class="header_area">
                <div class="logo">
                    <h1>Roni<span>B</span></h1>
                </div>
                <ul class="nav_menu_list">
                    <li class="menu_item"><a href="#">Home</a></li>
                    <li class="menu_item"><a href="#">about</a></li>
                    <li class="menu_item"><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- end header section -->