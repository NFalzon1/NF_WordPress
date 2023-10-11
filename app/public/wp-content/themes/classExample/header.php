<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!--States the language which is being used Function-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title> <!--Types the name of the page/blog title Function-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php esc_html(bloginfo('name')); ?>
                </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      
      <?php get_search_form(true); ?><!--Search Function-->
      </form>
    </div>
  </div>
</nav>
</header>
