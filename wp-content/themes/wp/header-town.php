<?php
/*
    FELIX TOWN
*/
?><!doctype html>
<html lang="ja">
<head>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="keywords" content="FELIX TOWN,住まいのパイオニアだからできること" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title ( '|', true,'right' ); ?><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css"/>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sliderPro.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slimmenu.min.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/css/slider-pro.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/slimmenu.min.css" rel="stylesheet" />
<script type="text/javascript">
    /* global $ */
    $( document ).ready(function( $ ) {
        $('.slimmenu').slimmenu(
        {
            resizeWidth: '960',
            collapserTitle: '',
            animSpeed:'medium',
            indentChildren: true,
            childrenIndenter: '&raquo;'
        });
    });
</script>
<?php wp_head(); ?>

<!--
<script>
/*
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45273377-2', 'auto');
  ga('send', 'pageview');

  ga('create', 'UA-56013916-2', 'auto', {'name': 'myTracker'});
  ga('myTracker.send', 'pageview');
*/
</script>
-->

</head>

<body <?php body_class(); ?>>
    <?php $slug = get_post($wp_query->post->ID)->post_name; ?>
    <div id="header">
    	<div id="headerR">
	        <div class="mobileHidden">
        		<div id="headerRR">
        			<p id="headertown">
                        <span class="towntel"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/hedder_tel.gif" /></span>
                        <a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/hedder_contact.gif" /></a>
                    </p>
        		</div>
            </div>
        </div>
        <div class="mobileHidden">
    	    <h1 id="tw01">【<?php wp_title(''); ?>】<br />新築一戸建て・注文住宅なら三幸住研にお任せ下さい。</h1>
        </div>
        <div class="pcHidden">
            <h1>豊中市の一戸建て・新築一戸建て・分譲住宅のことならフェリックスタウンにお任せ下さい。</h1>
        	<h2><a href="/" ><img src="<?php echo get_template_directory_uri(); ?>/common/header_logo.jpg" width="250" height="80" alt="FELIX HOUSE｜住まいのパイオニアだからできること" /></a></h2>
        </div>
    </div>
    <ul class="slimmenu">
        <li><a href="#">フェリックスハウス</a></li>
        <li><a href="#">商品ラインナップ</a></li>
        <li><a href="#">施工事例</a></li>
        <li><a href="#">会社案内</a></li>
        <li><a href="#">お客様の声</a></li>
    </ul>
    <div id="main">
        <img class="mobileHidden" src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/main.jpg" />
        <img class="pcHidden" src="<?php echo get_template_directory_uri(); ?>/images/sp/<?php echo $slug; ?>/main_sp.jpg" />
	</div>
	<div id="townnav">
        <ul>
            <li><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/navi01_01.jpg" /></a></li>
            <li><a href="#landplan"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/navi01_02.jpg" /></a></li>
            <li><a href="#plan"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/navi01_03.jpg" /></a></li>
            <li><a href="#location"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/navi01_04.jpg" /></a></li>
            <li><a href="#map"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/navi01_05.jpg" /></a></li>
            <li><a href="#outline"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/navi01_06.jpg" /></a></li>
        </ul>
    </div>
    <span class="mobileHidden"><?php breadcrumb(); ?></span>