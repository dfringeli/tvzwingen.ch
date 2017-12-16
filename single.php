<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">
    
    <div class="col-sm-7 col-md-8 col-lg-8">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'single'); ?>
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
