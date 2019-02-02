<?php get_header(); ?> 

<div class="content-left-wrap col-md-9">
    <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
  
    <?php 
    if ( have_posts() ) { while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
    ?>

    <div class="blog-post">
        <?php the_excerpt(); ?>
    </div><!-- /.content -->


    <?php
        endwhile;
    } 
    ?>

    </main><!-- #main -->
    </div><!-- #primary -->
  </div>



<?php get_footer(); ?>