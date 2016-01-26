<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link rel="stylesheet" href="/css/template.css" type="text/css" />
</head>
<div id="top"></div>
<body id="zh-home">
	<header>
		<div class="container">
			<a href="/" id="logo"><img src="/images/logo.png" alt="松源资本" /></a>
			<a href="#" id="pull"></a><!-- 响应式导航 -->
			<ul class="nav menu">
				<li class="item-102 current active"><a href="/" >首页</a></li>
				<li class="item-104"><a href="#about-us" >关于我们</a></li>
				<li class="item-103"><a href="#team" >管理团队</a></li>
				<li class="item-105"><a href="#portfolio" >投资组合</a></li>
				<li class="item-105"><a href="/category/news" >松源动态</a></li>
				<li class="item-183"><a href="/job.html" >加入我们</a></li>
				<li class="item-183"><a href="#contact" >联系我们</a></li>
				<li id="lan"><a href="/en">English</a></li>
			</ul>
		</div>
		<!-- // container -->
	</header>

	<div id="wrapper">
	  <div id="page">
