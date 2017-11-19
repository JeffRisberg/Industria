<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

 <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
 <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
 <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

 <?php wp_get_archives('type=monthly&format=link'); ?>

 <?php wp_head(); ?>
</head>

<body>
<center>
<div id="page">

<div id="header">
	<div id="headerTop">
		<div id="headerTitle">
			<a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a>
		</div>			
	</div>
	<div id="headerBottom">
		<div id="search_box">
			<form method="get" id="searchform" style="display:inline;" action="<?php bloginfo('home'); ?>/">
			Search:&nbsp;
			<input type="text" class="s" value="<?php the_search_query(); ?>" name="s" id="s" />&nbsp;
			<input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/btnGo.gif" value="Submit" align="top" />
			</form>
		</div>
		<div class="description">
			<?php bloginfo('description'); ?>
		</div>			
	</div>
</div>
