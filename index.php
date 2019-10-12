<!-- Rather than type out the entire header, you can use this function to call the header you made in header.php -->
<?php get_header(); ?>

<!-- Add posts using the wordpress loop -->
<div class="container">
  <div class="row">
    <?php

    if(have_posts()){
      while(have_posts()){
        the_post();?>
        <div class="col-md-3">
          <h3> <?php the_title(); ?></h3>

          <p> <?php echo "Published: " . get_the_date();?></p>
          <p> <?php echo "Written By: ". get_the_author(); ?></p>

          <!-- Examples of different functions you can use -->
          <?php the_date(); ?>
          <?php the_author(); ?>

          <?php the_excerpt();?>

          <a class="btn btn-primary btn-sma" href="<?php the_permalink(); ?>"> Read More </a>
        </div>
        <?php
      }//end of the while loop
    }//end of the if statement

    ?>
  </div>
</div>

<!-- Same thing with the footer as with the header  -->
<?php get_footer(); ?>
