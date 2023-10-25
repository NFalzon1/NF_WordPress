<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!--States the language which is being used Function-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title> <!--Types the name of the page/blog title Function-->
    <?php wp_Head(); ?> 
</head>
<body <?php body_class(); ?>> <!--Adds classes to body-->

<!--<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"> Home link Function--><!--
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php esc_html(bloginfo('name')); ?>
                </a>
            </div>
            <div class="col-6">

            </div>
            <div class="col-4">
                <?php get_search_form(true); ?>Search Function
            </div>
        </div>
    </div>
</header>-->

<header>
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <nav id="class_example-main-footer">
        <?php
          wp_nav_menu( array(
            'theme_location'=> 'main-menu',
          ));
        ?>
      </nav>
    </div>
  </div>
</div> 
      <?php get_search_form(true); ?><!--Search Function-->
</nav>
</header>


