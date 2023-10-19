<?php get_header() ?>

<h1>Archive</h1>

<div class="container">
  <div class="row">
    <div class="col-8">
      <?php if (have_posts()):
        while (have_posts()):
          the_post() // The : are used instead of the curly brackets ?>

          <h2>
            <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            </a>
            
          </h2>

          <small>
          <?php the_date() ?> by <?php the_author_posts_link() ?>
        </small>

        <p>
          <?php //the_content();//
          the_excerpt();?>
        </p>

        <?php endwhile;
              the_posts_pagination(array(
                'mid_size' => 1,
                'prev_text' => "Older",
                'next_text' => "Newer"
              )); //shows the pagination | mid_size controls how many other paginations are shown on both sides
        ?>

      <? else:
      echo "<p>Sorry, no posts found.</p>";
      endif;
       ?>
    </div>
    <div class="col4">
      <!-- Prepped for Sidebar -->
    </div>
  </div>
</div>
