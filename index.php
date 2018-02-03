<?php get_header(); ?>

<section class="home anchor" id="home">
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-2 col-xs-3"></div>
		<div class="col-md-4 col-sm-4 col-xs-6">
		<div class="user-info">
			<h1><?php bloginfo('name'); ?></h1>
			<p><?php bloginfo('description'); ?></p>
			<a class="button" data-fancybox data-src="#fancy" href="javascript:;" >Hire me</a>
				<div class="fancy_form contact_form" id="fancy">

                    <form action="http://formspree.io/<?php
                    $options = get_option('sample_theme_options');
                    echo $options['your email']; ?>" novalidate="" target="_blank" method="POST">

                        <label class="col-sm-6 col-xs-12">Name
                            <input type="text" name="name"  required>
                        </label>

                        <label class="col-sm-6 col-xs-12">E-mail
                            <input type="email" name="email" required>
                        </label>

                        <label class="col-md-12 col-xs-12">Message
                            <textarea name="message" required></textarea>
                        </label>


                        <div class="confirm">
                            <button class="button">Confirm</button>
                        </div>

                    </form>

				</div>
			<a href="<?php
            $options = get_option('sample_theme_options');
            echo $options['explore more']; ?>" class="button">Explore more</a>
		</div>
	</div>
	</div>
</div>	
</section>

<section class="about anchor" id="about">
	<div class="container">
		<div class="col-md-12 col-xs-12 about-me">
			<h2><?php
                $idObj = get_category_by_slug('s_about');
                $id = $idObj->term_id;
                echo get_cat_name($id); ?></h2>
					<div class="col-md-2"></div>
					<div class="col-md-8 aboutme">

                        <?php if ( have_posts() ) : query_posts('p=16');
                            while (have_posts() ) : the_post(); ?>

                        <?php the_content(); ?>

                        <? endwhile; endif; wp_reset_query(); ?>
    
				</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php
                    $idObj = get_category_by_slug('skills');
                    $id = $idObj->term_id;
                    echo get_cat_name($id); ?></h2>
			</div>

                    <?php
                        $idObj = get_category_by_slug('skills');
                        $id = $idObj->term_id;
                        if ( have_posts() ) : query_posts('cat=' .$id);
                         while (have_posts() ) : the_post(); ?>

				<div class="col-md-4 skill">


					<h5><?php echo the_title(); ?></h5>
					<div class="progress progress-striped active">
  					<div class="progress-bar"  role="progressbar" aria-valuenow="<?php echo get_post_meta($post->ID, 'value', true); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo get_post_meta($post->ID, 'value', true); ?>%">
    					<span class="sr-only"><?php echo get_post_meta($post->ID, 'value', true); ?>% Complete</span>
  					</div>
					</div>
                </div>

                     <? endwhile; endif; wp_reset_query(); ?>

        </div>
	</div>
</section>

<section class="what-i-do anchor" id="service">
	<div class="container">
		<div class="col-md-12 col-xs-12">
			<div class="service">
				<h2><?php
                    $idObj = get_category_by_slug('s_what-i-do');
                    $id = $idObj->term_id;
                    echo get_cat_name($id); ?></h2>
				<div class="service_main-content">

                    <?php
                    $idObj = get_category_by_slug('s_what-i-do');
                    $id = $idObj->term_id;
                    if ( have_posts() ) : query_posts('cat=' .$id);
                        while (have_posts() ) : the_post(); ?>

                        <div class="col-md-4">

							<span><?php the_post_thumbnail(array()); ?></span>
							<h6><?php the_title(); ?></h6>
							  <?php the_content(); ?>

                        </div>

                    <? endwhile; endif; wp_reset_query(); ?>

				</div>
			</div>
		</div>	
	</div>
</section>

<section class="works anchor" id="portfolio">
	<div class="container">
		<div class="col-md-12 col-xs-12">
			<div class="recent-works">
				<h2><?php
                    $idObj = get_category_by_slug('s_portfolio');
                    $id = $idObj->term_id;
                    echo get_cat_name($id); ?></h2>
				<div class="recent-works_main-content">

                    <?php
                    $idObj = get_category_by_slug('s_portfolio');
                    $id = $idObj->term_id;
                    if ( have_posts() ) : query_posts('cat=' .$id);
                     while (have_posts() ) : the_post(); ?>

					<div class="col-md-4 work col-xs-12">
						    <?php the_post_thumbnail(array()); ?>
						<div class="mask">
							<h4><?php echo the_title(); ?></h4>
							<a href="#<?php echo get_post_meta($post->ID, 'href', true); ?>" data-fancybox class="view" title="See the work process">&nbsp;</a>
							<a href="<?php echo get_post_meta($post->ID, 'reference_to_work', true); ?>" class="browse" target="_blank" title="View demo in browser">&nbsp;</a>
						</div>
						<div class="project_descr hidden" id="<?php echo get_post_meta($post->ID, 'href', true); ?>">
							<h4><?php echo the_title(); ?></h4>
                                <?php echo the_content(); ?>
							<?php the_post_thumbnail(array()); ?>
						</div>
					</div>

                <? endwhile; endif; wp_reset_query(); ?>


                </div>
			</div>
		</div>
	<div class="col-md-12 col-xs-12 load">
			<button class="button" id="loadMore" onclick="show()">Load more</button>
	</div>	
	</div>

	<div class="more hidden">
		<div class="container">
			<div class="col-md-12 col-xs-12">
				<div class="recent-works">
					<div class="recent-works_main-content row">

                        <?php
                        $idObj = get_category_by_slug('more_works');
                        $id = $idObj->term_id;
                        if ( have_posts() ) : query_posts('cat=' .$id);
                        while (have_posts() ) : the_post(); ?>

                             <div class="col-md-4 work col-xs-12">
                                 <?php the_post_thumbnail(array()); ?>
                                 <div class="mask">
                                    <h4><?php echo the_title(); ?></h4>
                                     <a href="#<?php echo get_post_meta($post->ID, 'href', true); ?>" data-fancybox class="view" title="See the work process">&nbsp;</a>
                                     <a href="http://d2o0t5hpnwv4c1.cloudfront.net/017_Creatif/Site/index.html" class="browse" target="_blank" title="View demo in browser">&nbsp;</a>
                                 </div>
                                 <div class="project_descr hidden" id="<?php echo get_post_meta($post->ID, 'href', true); ?>">
                                    <h4><?php echo the_title(); ?></h4>
                                    <?php echo the_content(); ?>
                                    <?php the_post_thumbnail(array()); ?>
                                 </div>
                             </div>

                         <? endwhile; endif; wp_reset_query(); ?>

					</div>
				</div>	
			</div>
		</div>
	</div>

	<div class="facts">
	<div class="container">

        <?php
        $idObj = get_category_by_slug('facts');
        $id = $idObj->term_id;
        if ( have_posts() ) : query_posts('cat=' .$id);
        while (have_posts() ) : the_post(); ?>

		<div class="col-md-4 one-fact">
			<span><?php echo the_title(); ?></span>
            <?php echo the_content(); ?>
		</div>

        <? endwhile; endif; wp_reset_query(); ?>

	</div>
	</div>
</section>

<section class="contact anchor" id="contact">
	<div class="container">
		<h2><?php
            $idObj = get_category_by_slug('s_contacts');
            $id = $idObj->term_id;
            echo get_cat_name($id); ?></h2>
		<div class="col-md-12 col-xs-12 contact_form">
			<form action="https://formspree.io/<?php
            $options = get_option('sample_theme_options');
            echo $options['your email']; ?>" novalidate="" target="_blank" method="POST">

                <label class="col-sm-6 col-xs-12">Name
                    <input type="text" name="name"  required>
                </label>

                <label class="col-sm-6 col-xs-12">E-mail
                    <input type="email" name="email" required>
                </label>

                <label class="col-md-12 col-xs-12">Message
                    <textarea name="message" required></textarea>
                </label>


                <div class="confirm">
                    <button class="button">Confirm</button>
                </div>

				</form>
		</div>
	</div>
</section>

<?php get_footer(); ?>