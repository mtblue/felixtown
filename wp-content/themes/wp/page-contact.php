<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
	    
    		<div id="t02L">
                <div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif" />
                </div>
                <div class="t03">
                    <p>下記のお問合わせフォームから必須項目をご記入の上、お問合わせください。</p>
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="contact"> 
                		<?php the_content(); ?>
                	</div>
            		<?php endwhile; ?>
            		<?php else : ?>
            　　　　　		記事はありません
            		<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
