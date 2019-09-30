<?php get_header(); ?>

  <div class="post-standard">
     
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
            endwhile; else: ?>
        <?php endif; ?>
    </div> <!-- /.container -->

  </div>
<?php get_footer(); ?>