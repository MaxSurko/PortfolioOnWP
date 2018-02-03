<footer>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              2017-<?php echo date('Y'); ?>. All Rights Reserved
              <div class="socio">
                  <ul>

                      <?php if ( have_posts() ) : query_posts('cat=5');
                      while (have_posts() ) : the_post(); ?>

                      <li>
                          <a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php echo the_title(); ?>">
                              <i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>">&nbsp;</i>
                          </a>
                      </li>

                      <? endwhile; endif; wp_reset_query(); ?>

                  </ul>
              </div>
          </div>
      </div>
  </div>
</footer>

<!--preloader-->
<div class="loader">
	<div class="loader_inner"></div>
</div>

<?php wp_footer(); ?>


		
</body>
</html>