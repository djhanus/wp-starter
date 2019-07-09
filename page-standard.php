<?php get_header(); /* Template Name: Standard Page */ ?>
  <div id="page-standard">
     
    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
          endwhile; else: ?>
      <?php endif; ?>
    </div> <!-- /.container -->
  
  </div>  <!-- / #page-standard -->
<?php get_footer(); ?>