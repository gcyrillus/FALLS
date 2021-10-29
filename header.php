<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
<?php
	$plxShow->meta('description');
	$plxShow->meta('keywords');
	$plxShow->meta('author');
?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png?ver=1.0" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/reset.css?ver=1.0" media="screen,print"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/falls.css?ver=1.0" media="screen,print"/>
<?php
	$plxShow->templateCss();
	$plxShow->pluginsCss();
?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlPostsRssFeed($plxShow->plxMotor->mode) ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>
<body id="top" class="page mode-<?php $plxShow->mode(true) ?>">
	<header>
	  <h1><?php $plxShow->mainTitle('link'); ?></h1>
	  <h2><?php $plxShow->subTitle(); ?></h2>
	  <nav>
		<ul class="menu">
			<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_class #static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>
			'); ?>
		</ul></nav>
	</header>
