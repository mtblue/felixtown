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
                    <div class="t03">
                        <div class="title">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/news_title.gif" alt="WHAT'S NEW 新着情報" />
                        </div>
                        <ul id="news">
                            <?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 7 ) ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <li><?php the_time('Y.m.d'); ?>
                                <?php if(get_post_meta($post->ID,'URL',true)): ?>
                                	<a href="<?php echo get_post_meta($post->ID,"URL",true); ?>" target="_self">
                                <?php endif; ?>
                                <?php if(get_post_meta($post->ID,'新着情報',true)): ?>
                             	   <span style="margin-left:80px;"><?php echo get_post_meta($post->ID,"新着情報",true); ?></span>
                                <?php endif; ?>
                                <?php if(get_post_meta($post->ID,'URL',true)): ?>
                                	</a>
                                <?php endif; ?>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <a href="/news2/"><img class="mobileHidden" src="<?php echo get_template_directory_uri(); ?>/images/news_btn.gif" width="670" height="30" alt="新着情報一覧" /></a>
                        <a href="/news2/"><img class="pcHidden" src="<?php echo get_template_directory_uri(); ?>/images/sp/news_btn_sp.jpg" alt="新着情報一覧" /></a>
                    </div>
       	    	    <?php get_sidebar(); ?>
       	    	</div>
                <div class="t04">
                    <ul>
　　　　　　　　　　　　　<li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/okamachikita_img.jpg" alt="" />
                            <div class="con">
                                <p class="cost">土地、建物セット価格｜3,980万円</p>
                                <dl>
                                    <dt>所在地</dt>
                                        <dd>豊中市岡町北1丁目</dd>
                                </dl>
                                <dl>
                                    <dt>交通</dt>
                                        <dd>阪急宝塚線「岡町」駅徒歩6分</dd>
                                </dl>
                                <dl>
                                    <dt>総区画数</dt>
                                        <dd>全1区画</dd>
                                </dl>
                                <div class="link">
                                    <div class="limg"><a href="/okamachikita/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/town_btn01.jpg" /></a></div>
                                    <div class="rimg"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/town_btn02.jpg" /></a></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/kiyosedai_img.jpg" alt="" />
                            <div class="con">
                                <p class="cost">土地、建物セット価格｜2,660万円</p>
                                <dl>
                                    <dt>所在地</dt>
                                        <dd>兵庫県西宮市清瀬台</dd>
                                </dl>
                                <dl>
                                    <dt>交通</dt>
                                        <dd>JR福知山線「西宮名塩」駅徒歩20分</dd>
                                </dl>
                                <dl>
                                    <dt>総区画数</dt>
                                        <dd>全1区画</dd>
                                </dl>
                                <div class="link">
                                    <div class="limg"><a href="/kiyosedai/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/town_btn01.jpg" /></a></div>
                                    <div class="rimg"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/town_btn02.jpg" /></a></div>
                                </div>
                            </div>
                        </li>
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
                                <p class="cost"><font color="red" size="5">成約御礼</font></p>
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
                                <dl>
                                    <dt>土地価格</dt>
                                        <dd>3,400万円</dd>
                                </dl>
                                <div class="link">
                                    <div class="limg"></div>
                                    <div class="rimg"></div>
                                </div>
                        </li>
                    </ul>
                </div>
   	    	</div>
        </div>
<?php get_footer(); ?>
    