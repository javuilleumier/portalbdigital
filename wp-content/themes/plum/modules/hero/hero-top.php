<?php if ( get_theme_mod('plum_hero_enable') && is_front_page() && !is_home() ) : ?>
    <div id="hero" class="hero-content">
        <div class="layer"></div>
		<div class="container hero-container">
	        <div class="col-md-8 col-sm-8 h-content">
	            <h1 class="title">
	                <?php echo get_the_title(get_theme_mod('plum_hero1_selectpage')); ?>
	            </h1>
	            <?php if(get_theme_mod('plum_hero1_full_content', true)) : ?>
	                <div class="excerpt">
	                    <?php $my_postid = get_theme_mod('plum_hero1_selectpage');
	                    $content_post = get_post($my_postid);
	                    $content = $content_post->post_content;
	                    $content = apply_filters('the_content', $content);
	                    echo $content; ?>
	                </div>
	            <?php else : ?>
	                <div class="excerpt">
	                    <?php $my_postid = get_theme_mod('plum_hero1_selectpage');
	                    $content_post = get_post($my_postid);
	                    $content = $content_post->post_content;
	                    $content = apply_filters('the_content', $content);
	                    echo substr($content, 0, 300)."..."; ?>
	                </div>
	            <?php endif; ?>
	            <?php if ( get_theme_mod('plum_hero1_button') != '') : ?>
	                <a href="<?php the_permalink(get_theme_mod('plum_hero1_selectpage')); ?>" class="more-button">
	                    <?php echo get_theme_mod('plum_hero1_button'); ?>
	                </a>
	            <?php endif; ?>
	        </div>
	        <div class="f-image col-md-4 col-sm-4">
	            <?php $a =  wp_get_attachment_url( get_post_thumbnail_id(get_theme_mod('plum_hero1_selectpage')) ); ?>
	                <a href="<?php the_permalink(get_theme_mod('plum_hero1_selectpage')); ?>"><img src="<?php echo $a; ?>"></a>
	        </div>
		</div>
    </div>
<?php endif; ?>