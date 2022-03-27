<!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->

<!-- Mirrored from demo.academiathemes.com/lectura/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jun 2015 09:53:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo STYLE_CSS ?>/style.css" media="screen" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="xmlrpc.php" />
	<!--[if lt IE 9]>
	<script src="http://demo.academiathemes.com/lectura/wp-content/themes/lectura/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	
<!-- This site is optimized with the Yoast WordPress SEO plugin v2.1.1 - https://yoast.com/wordpress/plugins/seo/ -->
<title><?php echo config('title') ?></title>       
<meta name="author" content="Awolu Faith <awolu_faith@live.com>" />
        <meta name="description" content="<?php echo config('meta_description') ?>">
        <meta name="Keywords" content="<?php echo config('meta_keywords') ?>">
        <style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>

<link rel='stylesheet' id='thickbox.css-css'  href='<?php echo STYLE_CSS ?>/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='thickbox.css-css'  href='<?php echo STYLE_JS ?>/thickbox/thickbox.css' type='text/css' media='all' />
<link rel='stylesheet' id='academia-webfont-source-sans-pro-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='<?php echo STYLE_JS ?>/jetpack/css/jetpack1bba.css?ver=3.5' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo STYLE_JS ?>/jquery/jquery4a80.js?ver=1.11.2'></script>
<script type='text/javascript' src='<?php echo STYLE_JS ?>/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='<?php echo STYLE_JS ?>/superfish.js'></script>
<script type='text/javascript' src='<?php echo STYLE_JS ?>/selectnav.min.js'></script>
<script type='text/javascript' src='<?php echo STYLE_JS ?>/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='<?php echo STYLE_JS ?>/scripts.js'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.2.2" />
<link rel='shortlink' href='http://wp.me/4cPSs' />

</head>
<body class="home blog">

<div id="container">

	<div class="wrapper wrapper-main">
	
	<header role="banner">
	
		<div class="wrapper wrapper-header">
		
			<div id="logo" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="<?php echo config('title') ?>" />
								<a href="<?php echo site_url() ?>" class="logo-expanded">
                                <img style="width:180px;" src="<?php echo config('logo') ?>" alt="<?php echo config('title') ?>" />
                            </a>
			</div><!-- end #logo -->

						<div id="useful-menu" role="navigation">
				<form action="<?php echo site_url('search/search_keyword');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "<?php echo lang('global_search'); ?>"  style="

    background-color: #222c43;
    color: white;
    border: 0px;
    padding: 3px;

"/>
</form>
				
			</div><!-- #useful-menu -->
						
			<div class="cleaner">&nbsp;</div>
			
		</div><!-- .wrapper -->
	
		<div class="wrapper wrapper-menu">

			<nav id="site-navigation" role="navigation">
				
				<ul id="menu-main-menu" class="dropdown">
<li id="menu-item-223" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-223"><a href="<?php echo site_url() ?>"><?php echo lang('global_home'); ?></a></li>
<li id="menu-item-188" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-188"><a href="<?php echo site_url('aboutus');?>"><?php echo lang('global_about'); ?></a>
</li>
<li id="menu-item-232" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-232"><a href="#"><?php echo lang('global_news_events'); ?></a>
<ul class="sub-menu">
	<li id="menu-item-192" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-192"><a href="<?php echo site_url('news');?>"><?php echo lang('global_news_update'); ?></a></li>
	<li id="menu-item-191" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-191"><a href="<?php echo site_url('events') ?>"><?php echo lang('global_events'); ?></a></li>
        <li id="menu-item-191" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-191"><a href="<?php echo site_url('page/3') ?>">Submenu-1</a></li>
</ul>    
</li>
<li id="menu-item-233" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-233"><a href="#"><?php echo lang('global_courses'); ?></a>
<ul class="sub-menu">
     <?php foreach ($this->db
                 ->order_by('category_id' ,'DESC')
                ->get('categories')
                ->result()
                as $item): ?>
	<li id="menu-item-225" class="menu-item menu-item-type-taxonomy menu-item-object-course-type menu-item-225"><a href="<?php echo site_url('category/' . $item->category_id . '-' . permalink($item->title)) ?>"><?php echo $item->title ?></a></li>
<?php endforeach; ?>
</ul>
</li>
<li id="menu-item-234" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-234"><a href="<?php echo site_url('staff') ?>"><?php echo lang('global_staff_directory'); ?></a></li>

<li id="menu-item-254" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-254"><a href="<?php echo site_url('home/contactus') ?>"><?php echo lang('global_contact_us'); ?></a></li>
</ul>	
				<div class="cleaner">&nbsp;</div>
				
			</nav><!-- #site-navigation -->

		</div><!-- .wrapper .wrapper-menu -->
	
	</header>



    {layout}


<footer>
		<div id="footer-main">
		
			<div class="wrapper wrapper-footer">
			
				<div class="academia-column academia-column-1">
				
					<div class="widget academia-contacts" id="academia-widget-contacts-2"><p class="title-widget"><?php echo lang('global_contact_us'); ?></p>
		<ul class="academia-contacts">
			<li class="academia-contact">
                            <img src="<?php echo site_url(); ?>/styles/site/default/assets/images/x.gif" width="16" height="18" alt="" class="academia-sprite-contact academia-contact-marker" />
                            <span class="academia-contact-value"><strong>+ Address:</strong> <?php echo config('address') ?> </span>
                        </li><!-- .academia-contact --><li class="academia-contact">
                            <img src="<?php echo STYLE_IMAGES ?>/x.gif" width="16" height="18" alt="" class="academia-sprite-contact academia-contact-phone" />
                            <span class="academia-contact-value"><strong>+ WhatsApp:</strong> <?php echo config('whatsapp') ?></span></li>
                        <!-- .academia-contact --><li class="academia-contact">
                            <img src="<?php echo STYLE_IMAGES ?>/x.gif" width="16" height="18" alt="" class="academia-sprite-contact academia-contact-fax" />
                            <span class="academia-contact-value"><strong>+ Tel:</strong> <?php echo config('phone') ?> </span>
                        </li><!-- .academia-contact --><li class="academia-contact">
                         <img src="<?php echo STYLE_IMAGES ?>/x.gif" width="16" height="18" alt="" class="academia-sprite-contact academia-contact-email" />
                            <span class="academia-contact-value"><strong>+ Email:</strong> <a href="mailto:<?php echo config('webmaster_email') ?>"><?php echo config('webmaster_email') ?></a>
                            </span></li><!-- .academia-contact -->		</ul><!-- .academia-contacts -->

		<div class="cleaner">&nbsp;</div></div>					
					<div class="cleaner">&nbsp;</div>
				
				</div><!-- .academia-column .academia-column-1 -->
	
				<div class="academia-column academia-column-2">
				
					<div class="widget widget_nav_menu" id="academia-menu-widget-2"><p class="title-widget"><?php echo lang('global_menu_widget'); ?></p><div class="menu-start-container"><ul id="menu-start" class="menu">
<li id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-228"><a href="<?php echo site_url('aboutus') ?>"><?php echo lang('global_about'); ?></a></li>
<li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252"><a href="<?php echo site_url('news');?>"><?php echo lang('global_news_update'); ?></a></li>
<li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252"><a href="<?php echo site_url('events');?>"><?php echo lang('global_events'); ?></a></li>
<li id="menu-item-191" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252"><a href="<?php echo site_url('page/1-privacy')?>"><?php echo lang('global_privacy'); ?></a></li>
<li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252"><a href="<?php echo site_url('home/contactus') ?>"><?php echo lang('global_contact_us'); ?></a></li>
</ul></div><div class="cleaner">&nbsp;</div></div>					
					<div class="cleaner">&nbsp;</div>
				
				</div><!-- .academia-column .academia-column-1 -->
	
				<div class="academia-column academia-column-3">
				
					<div class="widget widget_nav_menu" id="academia-menu-widget-3"><p class="title-widget"><?php echo lang('global_social'); ?></p><div class="menu-top-menu-container">
                                            <ul id="menu-start" class="menu">
<li id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-228"><a href="<?php echo config('facebook') ?>">Facebook</a></li>
<li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a href="<?php echo config('twitter') ?>">Twitter</a></li>
<li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252"><a href="<?php echo config('instagram') ?>">Instagram</a></li>
<li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252"><a href="<?php echo config('google') ?>">Google+</a></li>
<li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252"><a href="<?php echo config('linkedin') ?>">LinkedIn</a></li>
</ul>
                                            </div><div class="cleaner">&nbsp;</div></div>					
					<div class="cleaner">&nbsp;</div>
				
				</div><!-- .academia-column .academia-column-1 -->
			
				<div class="cleaner">&nbsp;</div>
			
			</div><!-- .wrapper .wrapper-footer -->
		
		</div><!-- #footer-main -->
		
		
		<div id="footer-copy">
		
			<div class="wrapper wrapper-footer-copy">
				
                            <p class="copy"><a href="<?php echo site_url() ?>"><?php echo config('copyright') ?></a></p>
	
				<div class="cleaner">&nbsp;</div>
			
			</div><!-- .wrapper .wrapper-footer-copy -->
		
		</div><!-- #footer-copy -->

	</footer>

</div><!-- end #container -->

<script type='text/javascript' src='s0.wp.com/wp-content/js/devicepx-jetpack105b.js?ver=201526'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":"http:\/\/demo.academiathemes.com\/lectura\/wp-includes\/js\/thickbox\/loadingAnimation.gif"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo STYLE_JS ?>/thickbox/thickboxab87.js?ver=3.1-20121105'></script>
<script type='text/javascript' src='stats.wp.com/e-201526.js' async defer></script>


</body>

<!-- Mirrored from demo.academiathemes.com/lectura/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jun 2015 09:54:08 GMT -->
</html>
<!-- Dynamic page generated in 1.782 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2015-06-26 07:48:59 -->

<!-- Compression = gzip -->
