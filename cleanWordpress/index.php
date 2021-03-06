<?php get_header(); ?>

<section id="main">
  <hr>
  <br>
  <div id="no-slide">
    <?php include (TEMPLATEPATH. '/slide.php'); ?>
  </div>

  <section id="articles_list">

    <?php query_posts("paged=$paged"); ?>
    <?php query_posts('category_name=Home'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article>
        <!-- style="width:300px;height:200px" -->
        <div class="thumb"><a href="<?php the_permalink();?>">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); }yy ?>
        </a></div>

        <hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></hgroup>
        <!-- <div class="date"><?php the_date(); ?> en <span><?php the_category();?></span></div> -->
        <div class="extract"><?php the_excerpt(); ?> </div>
      </article>
    <?php endwhile; else: ?>
      <h1>Not Found</h1>
    <?php endif; ?>
    <!-- <div id="pagination">
      <p><?php next_posts_link('<- Post Siguientes'); ?>
        <?php previous_posts_link('Post Anteriores ->'); ?></p>
    </div> -->
  </section>

<?php get_sidebar(); ?>
  </section>

<?php get_footer(); ?>
