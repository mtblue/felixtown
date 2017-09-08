
   	    	<div id="t02R">
   	    	    <div class="title">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/flier_title.gif" alt="WEB FLIER WEBチラシ" />
                </div>
                <ul id="wf">
                    <?php $i=0; $loop = new WP_Query( array( 'post_type' => 'web', 'posts_per_page' => 1 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <?php if(get_post_meta($post->ID,'PDF',true)): ?>
                    <?php $pdfsrc1 = wp_get_attachment_url(get_post_meta($post->ID,"PDF",true)); ?>
                    <?php $pdfsrc2 = wp_get_attachment_url(get_post_meta($post->ID,"サムネイル",true)); ?>
                    <li <?php if($i!=0) echo 'class="mobileHidden"' ; $i++; ?>>
                        <?php $comsrc1 = get_post_meta($post->ID,"コメント",true); ?>
                        <div><?php the_time('Y.m.d'); ?>  <?php echo $comsrc1; ?></div>
                        <a href="<?php echo $pdfsrc1; ?>" target="_blank"><img src="<?php echo $pdfsrc2 ?>"  height="120" /></a>
                    </li>
                    <?php endif; endwhile; ?>
                </ul>
                <a href="/flier/"><img class="mobileHidden" src="<?php echo get_template_directory_uri(); ?>/images/flier_btn.gif" width="240" height="30" alt="WEBチラシ一覧" /></a>
                <a href="/flier/"><img class="pcHidden" src="<?php echo get_template_directory_uri(); ?>/images/sp/flier_btn_sp.jpg" alt="WEBチラシ一覧" /></a>
        	</div>