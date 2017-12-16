<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">
    
    <div class="col-sm-7 col-md-8 col-lg-8">
      <div id="content" role="main">
        <h2><?php _e('Suchergebnisse für', 'bst'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h2>
        <hr/>
				<?php get_template_part('includes/loops/content', 'search'); ?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-sm-5 col-md-4 col-lg-4 hidden-xs" id="sidebar-desktop" role="navigation">
      <?php get_template_part('includes/sidebar-desktop'); ?>
    </div>

    <div class="col-xs-12 hidden-sm hidden-md hidden-lg" id="sidebar-mobile" role="navigation">
      <?php get_template_part('includes/sidebar-mobile'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
