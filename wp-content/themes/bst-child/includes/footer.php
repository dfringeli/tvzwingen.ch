<footer class="container site-footer">
  <hr/>
	<div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>
  <hr/>
  <div class="site-sub-footer">
    <div class="row">
      <div class="col-xs-12">
        <p class="text-center">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6">
        <p class="text-center">
          <a href="<?php echo home_url('/ueber-uns/kontakte'); ?>">Kontakte</a>
        </p>
      </div>
      <div class="col-xs-6">
        <p class="text-center">
          <a href="<?php echo home_url('/impressum'); ?>">Impressum</a>
        </p>
      </div>
    </div>
  </div>
</footer>
<div class="site-border"></div>

<?php wp_footer(); ?>
</body>
</html>
