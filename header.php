<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );


	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.png" type="image/x-icon" />
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slides.min.jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/formValidate_v1.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/twitter-fetcher.js"></script>


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php echo get_template_directory_uri();?>/js/shadowbox/shadowbox.css" rel="stylesheet" type="text/css" >

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/shadowbox/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>

<script type="text/javascript">

 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-36107426-1']);
 _gaq.push(['_trackPageview']);

 (function() {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();

</script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
//echo get_template_directory_uri();
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body>
	<div class="container">
    	<div class="header">
            <div id="header-wrapper">
        	<div class="top">
        		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="http://tedxmthood.com/wp-content/uploads/2014/07/tedxmthood-logo.png" /></a></h1>
			<div class="nav-top">
 <div class="date"> <!--
			<?php $post_ID_index = '2';
                        $home_page = get_page($post_ID_index);
                        echo $home_page->post_content;
			wp_btn_show(); ?>
--> </div>
<ul class="social">
<li><a target="_blank" href="http://www.facebook.com/TEDxMtHood" class="facebook" title="facebook">facebook</a></li>
<li><a target="_blank" href="https://twitter.com/TEDxMtHood" class="twitter" title="twitter">twitter</a></li>
<li><a target="_blank" href="http://www.flickr.com/photos/60150763@N05/" class="flickr" title="flickr">flickr</a></li>
<li><a target="_blank" href="http://www.youtube.com/results?search_query=tedxconcordiauportland" class="youtube" title="youtube">youtube</a></li>
<li><a target="_blank" href="http://www.linkedin.com/company/tedxconcordiauportland" class="linkedin" title="linkedin">linkedin</a></li>
</ul>
</div>
		</div>
            <nav class="boxmenu">
            	<ul class="menu" id="menu">

                    <li <?php if(is_home()) echo "class='active'"?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
                    <li <?php if($post->ID == '17') echo "class='active'"?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=17">EVENT</a></li>
                    <li <?php if($post->ID == '38' || $post->ID == '105') echo "class='active'"?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=38">SPEAKERS</a></li>
                    <li <?php if($post->ID == '40') echo "class='active'"?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=40">PARTNERS</a></li>
                    <li <?php if($post->ID == '47' || $post->ID=='85') echo "class='active'"?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=47">VIDEOS</a></li>
                    <li <?php if($post->ID == '1431' || !is_home() & in_category('blog') & !in_category('artistinresidence')) echo "class='active'"?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=1431">NEWS</a></li>
                    <li <?php if($post->ID == '1494') echo "class='active'"?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=1494">ARTIST IN RESIDENCE</a></li>
                    <li <?php if($post->ID == '1495') echo "class='active'"?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=1495">ADVENTURES</a></li>

                </ul>
            </nav>

                <div class="clear:both;"></div>
        </div>
            <div class="clear:both;"></div>
        </div>
        <div class="content">

	
