<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
	    
    		<div id="t02L">
                <div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif" />
                </div>
                <div class="t03">
                    <ul class="ns01">
                        <?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 7 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <li>
                            <div class="ns02"><?php the_time('Y.m.d'); ?></div>
                            <span class="ns03">
                                <?php if(get_post_meta($post->ID,'URL',true)): ?>
                                <a href="<?php echo get_post_meta($post->ID,"URL",true); ?>" target="_self"><?php the_title(); ?></a>
                                <?php else: the_title(); endif; ?>
                                <?php if(get_post_meta($post->ID,'新着情報',true)): ?>
                                <?php echo get_post_meta($post->ID,"新着情報",true); ?>
                                <?php endif; ?>
                            </span>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
