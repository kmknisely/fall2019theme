<!DOCTYPE html>
<html lan="en">
  <head>
    <meta charset="utf-8"/>
    <!-- Instead of a company having to go in and change the name of the title in the hardcode, we are using  a php function  called bloginfo which will access the general settings on wordpress. In this case we want to pass in the name of the site, so we use the parameter 'name'.

    Wordpress.org has info on valuable functions that you will need when coding.
    -->
    <title><?php bloginfo('name'); ?> </title>

    <!-- Link to CSS File. Using a similar technique as above. -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <!-- A Built in function under wordpress. Makes it so you dont have to load in a bunch of stuff -->
    <?php wp_head();?>
  </head>

  <body>
    <header>
      <!-- Bootstrap stuff -->
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <!-- Display header image. If the header image is empty, display the site title. Always close php before adding html -->
            <?php
              if(get_header_image() == ''){ ?>
                <h1> <a href="<?php get_home_url();?>"><?php bloginfo('name'); ?></a></h1> <?php
              }else{ ?>
                <a href="<?php get_home_url();?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header() -> height; ?>" width="<?php echo get_custom_header() -> width; ?>" alt="logo" title="logo"> </a><?php

              }
              ?>
          </div>

          <div class="col-lg-9 d-flex align-items-center">
            <nav>
              <p><a href=""> Navigation goes here </a></p>
            </nav>
          </div>
        </div>
      </div>
    </header>

<!-- NOTE: Don't close your body tag or html tag in this file!! You close them in the footer file!!  -->
