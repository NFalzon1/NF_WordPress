<div class="container-fluid footerStyle">
  <div class="row">
    <div class="col-2">
      <nav id="class_example-main-footer">
        <?php
          wp_nav_menu( array(
            'theme_location'=> 'footer-menu',
          ));
        ?>
      </nav>
    </div>
    <div class="col-sm">
      <?php get_sidebar('footer-1'); ?>
    </div>
    <div class="col-2">
      <?php get_sidebar('footer-2'); ?>
    </div>
    <div class="col-2">
      <?php get_sidebar('footer-3'); ?>
    </div>
    <div class="col-2">
      <?php get_sidebar('footer-4'); ?>
    </div>
    
</div>
<!-- Footer -->

<?php wp_footer(); ?>


</body>
</html>