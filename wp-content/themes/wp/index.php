<?php get_header(); ?>

    <div id="top">
        <div id="simple" class="slider-pro">
            <div class="sp-slides">
                <div class="sp-slide">
                  <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider01.jpg" />
                </div>
                <div class="sp-slide">
                  <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider02.jpg" />
                </div>
                <div class="sp-slide">
                  <img class="sp-image" src="<?php echo get_template_directory_uri(); ?>/images/slider03.jpg" />
                </div>
              <!--/ sp-slides--></div>
    </div>

	<div id="wrapper">
    	<div id="t01">
    	    <div id="t02t">
        		<div id="t02L">
                    <difv class="t03">
                        <div class="title">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/news_title.gif" alt="WHAT'S NEW 新着情報" />
                        </div>
                        <ul id="news">
                            <?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 7 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <li><?php the_time('Y.m.d'); ?><span class="mobileHidden">&nbsp;&nbsp;</span><span class="pcHidden"><br /></span>
                                <?php if(get_post_meta($post->ID,'URL',true)): ?>
                                <a href="<?php echo get_post_meta($post->ID,"URL",true); ?>" target="_self"><?php the_title(); ?></a>
                                <?php else: the_title(); endif; ?>
                                <?php if(get_post_meta($post->ID,'新着情報',true)): ?>
                                <br /><span style="margin-left:80px;"><?php echo get_post_meta($post->ID,"新着情報",true); ?></span>
                                <?php endif; ?>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <a href="/news/"><img class="mobileHidden" src="<?php echo get_template_directory_uri(); ?>/images/news_btn.gif" width="670" height="30" alt="WEBチラシ一覧" /></a>
                    </div>
       	    	    <?php get_sidebar(); ?>
       	    	</div>
                <div class="t04">
                    <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/kozudai_img.jpg" alt="" />
                            <div class="con">
                                <p class="cost">土地、建物セット価格｜2880万～3030万円</p>
                                <dl>
                                    <dt>所在地</dt>
                                        <dd>兵庫県神戸市北区上津台</dd>
                                </dl>
                                <dl>
                                    <dt>交通</dt>
                                        <dd>神戸電鉄「三田」よりバス15分</dd>
                                </dl>
                                <dl>
                                    <dt>総区画数</dt>
                                        <dd>全7区画</dd>
                                </dl>
                                <div class="link">
                                    <div class="limg"><a href="/kodudai/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/town_btn01.jpg" /></a></div>
                                    <div class="rimg"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/town_btn02.jpg" /></a></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/asahigaoka_img.jpg" alt="" />
                            <div class="con">
                                <p class="cost">土地、建物セット価格｜3,980万円</p>
                                <dl>
                                    <dt>所在地</dt>
                                        <dd>大阪府池田市旭丘</dd>
                                </dl>
                                <dl>
                                    <dt>交通</dt>
                                        <dd>阪急宝塚線「池田」駅自転車8分</dd>
                                </dl>
                                <dl>
                                    <dt>総区画数</dt>
                                        <dd>全1区画</dd>
                                </dl>
                                <div class="link">
                                    <div class="limg"><a href="/asahigaoka/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/town_btn01.jpg" /></a></div>
                                    <div class="rimg"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/town_btn02.jpg" /></a></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/miyayamacho_img.jpg" alt="" />
                            <div class="con">
                                <p class="cost">土地、建物セット価格｜4,980万円</p>
                                <dl>
                                    <dt>所在地</dt>
                                        <dd>大阪府豊中市宮山町</dd>
                                </dl>
                                <dl>
                                    <dt>交通</dt>
                                        <dd>大阪モノレール「柴原」駅徒歩10分</dd>
                                </dl>
                                <dl>
                                    <dt>総区画数</dt>
                                        <dd>全1区画</dd>
                                </dl>
                                <div class="link">
                                    <div class="limg"><a href="/miyayamacho/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/town_btn01.jpg" /></a></div>
                                    <div class="rimg"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/town_btn02.jpg" /></a></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/hattorinishimachi_img.jpg" alt="" />
                            <div class="con">
                                <p class="cost">土地価格｜3,400万円</p>
                                <dl>
                                    <dt>所在地</dt>
                                        <dd>大阪府豊中市服部西町３</dd>
                                </dl>
                                <dl>
                                    <dt>交通</dt>
                                        <dd>阪急宝塚線「服部天神」駅徒歩7分</dd>
                                </dl>
                                <dl>
                                    <dt>総区画数</dt>
                                        <dd>全1区画</dd>
                                </dl>
                                <div class="link">
                                    <div class="limg"><a href="/hattorinishimachi/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/town_btn01.jpg" /></a></div>
                                    <div class="rimg"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/town_btn02.jpg" /></a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
   	    	</div>
        </div>
<?php get_footer(); ?>
    