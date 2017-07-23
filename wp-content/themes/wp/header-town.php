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
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="header">
    	<div id="headerR">
    		<div id="headerRR">
    			<p id="headertown">
                    <span class="towntel"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/hedder_tel.gif" /></span>
                    <a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/hedder_contact.gif" /></a>
                </p>
    		</div>
        </div>
    	<h1 id="tw01">【<?php wp_title(''); ?>】<br />新築一戸建て・注文住宅なら三幸住研にお任せ下さい。</h1>
    </div>
    <div id="main">
        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/main.jpg" />
	</div>
	<div id="townnav">
        <ul>
            <li><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/navi01_01.jpg" /></a></li>
            <li><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/navi01_02.jpg" /></a></li>
            <li><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/navi01_03.jpg" /></a></li>
            <li><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/navi01_04.jpg" /></a></li>
            <li><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/navi01_05.jpg" /></a></li>
            <li><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/navi01_06.jpg" /></a></li>
        </ul>
    </div>
    <ul class="slimmenu">
        <li><a href="#">フェリックスハウス</a></li>
        <li><a href="#">商品ラインナップ</a></li>
        <li><a href="#">施工事例</a></li>
        <li><a href="#">会社案内</a></li>
        <li><a href="#">お客様の声</a></li>
    </ul>
    <span class="mobileHidden"><?php breadcrumb(); ?></span>