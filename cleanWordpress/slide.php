<section id="slideshow">
  <?php query_posts('category_name=Home'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
    <div class="slide">
      <div class="thumb">
        <!--<a href="< ?php the_permalink();?>">--><?php if ( has_post_thumbnail() ) { the_post_thumbnail('slider_thumbs'); } ?><!--</a>-->
      </div>
      <article>
        <hgroup><h2><!--<a href="< ?php the_permalink();?>">--><?php the_title(); ?><!--</a>--></h2></hgroup>
        <!-- <p class="date"><?php echo get_the_date(); ?> in <?php the_category(); ?></p> -->
        <br>
        <p class="extract"><?php the_excerpt(); ?></p>
      </article>
    </div>

  <?php endwhile; else: ?>
    <h2>Not Found</h2>
  <?php endif; ?>

</section>
