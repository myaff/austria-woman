<?php 
$mainPage = false;
if(strpos($_SERVER['REQUEST_URI'], '/index.php') || preg_match('/Austria\/$/', $_SERVER['REQUEST_URI'])){
	$mainPage = true;
}
$pathArr = explode('/', $_SERVER['REQUEST_URI']);
$root = '';
$currentPage = end($pathArr);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta property="og:title" content="Чем заняться мужчине в Австрии? 6 беспроигрышных сценариев." />
	<meta property="og:description" content="" />
	<meta property="og:image:url" content="https://olga-grabko.pro/case/austria/build/img/share.jpg" />
	<meta property="og:image:width" content="900" />
	<meta property="og:image:height" content="471" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?=$root;?>build/css/main.css" rel="stylesheet">
  <script src="<?=$root;?>build/js/vendor/jquery-3.1.1.slim.min.js"></script>
  <script src="<?=$root;?>build/js/vendor/mobile.js"></script>
  <script src="<?=$root;?>build/img/svg/sprite.js"></script>
  <title>Чем заняться мужчине в Австрии? 6 беспроигрышных сценариев.</title>
</head>
<body>
<div class="svg-placeholder hidden"></div>
<script>$('.svg-placeholder').html(SVG_SPRITE);</script>
<div class="layout">
<div class="header">
	<div class="header__content">
	  <div class="header__left">
	    <div class="header__logo logo logo--vs">
	      <a href="#" class="logo__link" target="_blank">
	            <img src="<?=$root?>build/img/logo-vs.png" alt="Вокруг света" class="logo__img"/>
	          </a>
	    </div>
	  </div>
    <div class="header__socials"><?php include($root.'parts/social.php'); ?></div>
    <div class="header__right">
      <div class="header__anons"><a href="" class="anons__link tp-heading--big tp--uc">6 мужских занятий</a></div>
	    <div class="header__logo logo logo--austria">
	          <a href="#" class="logo__link" target="_blank">
	            <img src="<?=$root?>build/img/logo-a.png" alt="Австрия" class="logo__img"/>
	          </a>
	    </div>
	  </div>
	</div>
</div>