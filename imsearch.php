<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="es-ES" dir="ltr">
	<head>
		<title>Buscar - Prueba</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Lenin" />
		<meta name="generator" content="Incomedia WebSite X5 Pro 2021.1.3 - www.websitex5.com" />
		<meta property="og:locale" content="es" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://localhost/imsearch.php" />
		<meta property="og:title" content="Buscar" />
		<meta property="og:site_name" content="Prueba" />
		<meta property="og:image" content="http://localhost/favImage.png" />
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="640">
		<meta property="og:image:height" content="640">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="style/reset.css?2021-1-3-2" media="screen,print" />
		<link rel="stylesheet" href="style/print.css?2021-1-3-2" media="print" />
		<link rel="stylesheet" href="style/style.css?2021-1-3-2" media="screen,print" />
		<link rel="stylesheet" href="style/template.css?2021-1-3-2" media="screen" />
		<link rel="stylesheet" href="pcss/imsearch.css?2021-1-3-2-638033651477402243" media="screen,print" />
		<script src="res/jquery.js?2021-1-3-2"></script>
		<script src="res/x5engine.js?2021-1-3-2" data-files-version="2021-1-3-2"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('El Explorador que estás usando no es compatible con las funciones requeridas para mostrar este Sitio web.','El Navegador que estás utilizando podría no ser compatible con las funciones requeridas para poder ver este Sitio web.','[1]Actualiza tu explorador [/1] o [2]continuar de todos modos[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'imsearch.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="favicon.png?2021-1-3-2-638033651477392364" type="image/png" />
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						<h1 class="imHidden">Buscar - Prueba</h1>
						<div id="imHeaderObjects"></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"><div id="imStickyBar_imObjectTitle_01_wrapper" class="template-object-wrapper"><div id="imStickyBar_imObjectTitle_01"><span id ="imStickyBar_imObjectTitle_01_text" ><a href="index.html" onclick="return x5engine.utils.location('index.html', null, false)">Desarrollador</a></span></div></div><div id="imStickyBar_imMenuObject_02_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imStickyBar_imMenuObject_02"><div id="imStickyBar_imMenuObject_02_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/index.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="index.html">
Página de inicio		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/sobre-mi..html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="sobre-mi..html">
Sobre mi.		</a>
</div>
</div>
	</li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imStickyBar_imMenuObject_02_settings = {
	'menuId': 'imStickyBar_imMenuObject_02',
	'responsiveMenuEffect': 'reveal',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imStickyBar_imMenuObject_02_settings)});
$(function () {$('#imStickyBar_imMenuObject_02_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0;    $this.on('mouseenter', function () {        clearTimeout(timeout);        setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).show(); }, 250);    }).on('mouseleave', function () {        timeout = setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).hide(); }, 250);    });});});

</script>
</div><div id="imStickyBar_imObjectTitle_03_wrapper" class="template-object-wrapper"><div id="imStickyBar_imObjectTitle_03"><span id ="imStickyBar_imObjectTitle_03_text" ><a href="index.html" onclick="return x5engine.utils.location('index.html', null, false)">Novato</a></span></div></div></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Salta el menu principal">Vaya al Contenido</a>
					<div id="imSideBar">
						<div id="imSideBarObjects"></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imSearchPage">
						<h2 id="imPgTitle">Resultados de búsqueda</h2>
						<?php
						$search = new imSearch();
						$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search']) : "";
						$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
						$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
						<div class="searchPageContainer">
						<?php echo $search->search($keys, $page, $type); ?>
						</div>
						</div>
						
					</main>
					<footer id="imFooter">
						<div id="imFooterObjects"></div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Lea esta página de nuevo">Regreso al contenido</a></span>
			</div>
		</div>
		
		<noscript class="imNoScript"><div class="alert alert-red">Para utilizar este sitio tienes que habilitar JavaScript.</div></noscript>
	</body>
</html>
