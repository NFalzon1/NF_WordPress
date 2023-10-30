<h1><?php echo $args['section_title']; ?></h1>

<?php

$args = array('section_title' => 'Home');
    get_template_part("template-parts/content", null, $args);

?>

<div class="col-8">
      <?php if (have_posts()):
        while (have_posts()):
          the_post() // The : are used instead of the curly brackets ?>

        <?php get_template_part("template-parts/content", null, null); ?>
        <?php endwhile;
              the_posts_pagination(array(
                'mid_size' => 1,
                'prev_text' => "Newer",
                'next_text' => "Older"
              )); //shows the pagination | mid_size controls how many other paginations are shown on both sides
        ?>

      <? else:
      echo "<p>Sorry, no posts found.</p>";
      endif;
       ?>
    </div>
   