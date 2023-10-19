<?php get_header() ?>

<style>
  .textCentre {
    text-align: center;
  }
</style>

<!--<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img class="Imagecarousel" src="https://images.pexels.com/photos/3991976/pexels-photo-3991976.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="Imagecarousel"src="https://images.pexels.com/photos/186241/pexels-photo-186241.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="Imagecarousel"src="https://images.pexels.com/photos/1171084/pexels-photo-1171084.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

<!--<div class="container text-center">
  <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://images.pexels.com/photos/106011/pexels-photo-106011.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="card-img-top" alt="...">
  <h5 class="card-title">Photography</h5>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://images.pexels.com/photos/2446709/pexels-photo-2446709.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="...">
  <h5 class="card-title">Videography</h5>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://images.pexels.com/photos/326514/pexels-photo-326514.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="...">
  <h5 class="card-title">Graphic Design</h5>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
    </div>
  </div>
</div>-->

<h1>Index</h1>

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




<?php get_footer() ?>