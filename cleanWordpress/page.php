<?php get_header(); ?>

<section id="main">

  <section id="articles_list">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article>
        <!-- style="width:300px;height:200px" -->
        <div class="thumb"><a href="<?php the_permalink();?>">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
        </a></div>

        <hgroup><h2><?php the_title(); ?></h2></hgroup>
        <div class="extract"><?php the_content(); ?> </div>
      </article>
    <?php endwhile; else: ?>
      <h1>Not Found</h1>
    <?php endif; ?>
  </section>

<?php get_sidebar(); ?>
  </section>

<?php get_footer(); ?>
