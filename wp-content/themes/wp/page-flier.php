<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
    		<div id="t02L">
                <div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif" />
                </div>
                <div class="t03">
                    <div class="wf01">
                        <?php $loop = new WP_Query( array( 'post_type' => 'web', 'posts_per_page' => 4 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <ul id="wf">
            		        <?php if(get_post_meta($post->ID,'サムネイル',true)): ?>
                                <?php if(get_post_meta($post->ID,'PDF',true)): ?>
                                    <?php $thumsrc1 = wp_get_attachment_url(get_post_meta($post->ID,"サムネイル",true)); ?>
                                    <?php $pdfsrc1 = wp_get_attachment_url(get_post_meta($post->ID,"PDF",true)); ?>
                                    <li class="wfl"><a href="<?php echo $pdfsrc1; ?>" target="_blank"><img src="<?php echo $thumsrc1; ?>" /></a></li>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if(get_post_meta($post->ID,'コメント',true)): ?>
                                <?php $comsrc1 = get_post_meta($post->ID,"コメント",true); ?>
                                <li class="wfr">
                                    <div><?php the_time('Y.m.d'); ?></div>
                                    <pre><?php echo $comsrc1; ?></pre>
                                </li>
                        </ul>
                        <?php endif; endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
