<?php
session_start();
include 'conexion.proc.php';
if (isset($_SESSION['user'])) {
//   session_destroy();
// } else {
header('location: home.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<!-- saved from url=(0025)http://www.j23.fje.edu/es -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" version="XHTML+RDFa 1.0" dir="ltr" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/terms/" xmlns:foaf="http://xmlns.com/foaf/0.1/" xmlns:og="http://ogp.me/ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:sioc="http://rdfs.org/sioc/ns#" xmlns:sioct="http://rdfs.org/sioc/types#" xmlns:skos="http://www.w3.org/2004/02/skos/core#" xmlns:xsd="http://www.w3.org/2001/XMLSchema#" data-livestyle-extension="available" class="js"><head profile="http://www.w3.org/1999/xhtml/vocab"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
<link rel="alternate" type="application/rss+xml" title="Jesuïtes Bellvitge - Centre d&#39;estudis Joan XXIII RSS" href="http://www.j23.fje.edu/es/rss.xml">
<link rel="shortcut icon" href="http://www.j23.fje.edu/sites/all/themes/escuelas_fje/images/favicon_bellvitge_fje.ico" type="image/vnd.microsoft.icon">
<meta name="generator" content="Drupal 7 (https://www.drupal.org)">
<link rel="canonical" href="http://www.j23.fje.edu/es/node">
<link rel="shortlink" href="http://www.j23.fje.edu/es/node">
  <title>Inicio | Jesuïtes Bellvitge - Centre d'estudis Joan XXIII</title>
  <style type="text/css" media="all">
@import url("http://www.j23.fje.edu/modules/system/system.base.css?p7zpqu");
@import url("http://www.j23.fje.edu/modules/system/system.menus.css?p7zpqu");
@import url("http://www.j23.fje.edu/modules/system/system.messages.css?p7zpqu");
@import url("http://www.j23.fje.edu/modules/system/system.theme.css?p7zpqu");
</style>
<style type="text/css" media="all">
@import url("http://www.j23.fje.edu/sites/all/modules/views_slideshow/views_slideshow.css?p7zpqu");
</style>
<style type="text/css" media="all">
@import url("http://www.j23.fje.edu/sites/all/modules/date/date_api/date.css?p7zpqu");
@import url("http://www.j23.fje.edu/sites/all/modules/date/date_popup/themes/datepicker.1.7.css?p7zpqu");
@import url("http://www.j23.fje.edu/sites/all/modules/domain/domain_nav/domain_nav.css?p7zpqu");
@import url("http://www.j23.fje.edu/modules/field/theme/field.css?p7zpqu");
@import url("http://www.j23.fje.edu/modules/node/node.css?p7zpqu");
@import url("http://www.j23.fje.edu/modules/search/search.css?p7zpqu");
@import url("http://www.j23.fje.edu/modules/user/user.css?p7zpqu");
@import url("http://www.j23.fje.edu/sites/all/modules/youtube/css/youtube.css?p7zpqu");
@import url("http://www.j23.fje.edu/sites/all/modules/views/css/views.css?p7zpqu");
</style>
<style type="text/css" media="all">
@import url("http://www.j23.fje.edu/sites/all/modules/colorbox/styles/default/colorbox_style.css?p7zpqu");
@import url("http://www.j23.fje.edu/sites/all/modules/ctools/css/ctools.css?p7zpqu");
@import url("http://www.j23.fje.edu/modules/locale/locale.css?p7zpqu");
@import url("http://www.j23.fje.edu/sites/all/modules/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.css?p7zpqu");
@import url("http://www.j23.fje.edu/sites/all/modules/eu_cookie_compliance/css/eu_cookie_compliance.css?p7zpqu");
</style>
<style type="text/css" media="all">
<!--/*--><![CDATA[/*><!--*/
#sliding-popup.sliding-popup-bottom{background:#000000;}#sliding-popup .popup-content #popup-text h1,#sliding-popup .popup-content #popup-text h2,#sliding-popup .popup-content #popup-text h3,#sliding-popup .popup-content #popup-text p{color:#ffffff !important;}

/*]]>*/-->
</style>
<style type="text/css" media="all">
@import url("http://www.j23.fje.edu/sites/all/themes/escuelas_fje/../global_fje/css/comun.css?p7zpqu");
@import url("http://www.j23.fje.edu/sites/all/themes/escuelas_fje/../global_fje/css/colegio.css?p7zpqu");
</style>
  <!--
  <link rel="stylesheet" type="text/css" href="/sites/all/themes/global_fje/css/comun.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/sites/all/themes/global_fje/css/colegio.css" media="screen" />
  -->
  <script async="" src="./otros/index/analytics.js.descarga"></script><script type="text/javascript" src="./otros/index/jquery.js.descarga"></script>
<script type="text/javascript" src="./otros/index/jquery.once.js.descarga"></script>
<script type="text/javascript" src="./otros/index/drupal.js.descarga"></script>
<script type="text/javascript" src="./otros/index/views_slideshow.js.descarga"></script>
<script type="text/javascript" src="./otros/index/jquery.cookie.js.descarga"></script>
<script type="text/javascript" src="./otros/index/es_BuI5tjHt6VGvNuEp8UnM6NJi_JF11hAVAXWWemRtcMs.js.descarga"></script>
<script type="text/javascript" src="./otros/index/colorbox.js.descarga"></script>
<script type="text/javascript" src="./otros/index/colorbox_style.js.descarga"></script>
<script type="text/javascript" src="./otros/index/jquery.cycle.all.js.descarga"></script>
<script type="text/javascript" src="./otros/index/views_slideshow_cycle.js.descarga"></script>
<script type="text/javascript" src="./otros/index/googleanalytics.js.descarga"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,"script","https://www.google-analytics.com/analytics.js","ga");ga("create", "UA-28977384-4", {"cookieDomain":"auto"});ga("create", "UA-28977384-20", 'auto', 'myTracker');ga("send", "pageview");ga('myTracker.send', 'pageview');
//--><!]]>
</script>
<script type="text/javascript" src="./otros/index/topbar-menu-escuela.js.descarga"></script>
<script type="text/javascript" src="./otros/index/header-scroll-escuela.js.descarga"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"es\/","ajaxPageState":{"theme":"escuelas_fje","theme_token":"RM8rtHjRrMoTbVXzeBI9HBUyPk-b4RuCN8FafZpamAE","js":{"0":1,"sites\/all\/modules\/eu_cookie_compliance\/js\/eu_cookie_compliance.js":1,"sites\/all\/modules\/jquery_update\/replace\/jquery\/1.8\/jquery.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/views_slideshow\/js\/views_slideshow.js":1,"sites\/all\/modules\/jquery_update\/replace\/ui\/external\/jquery.cookie.js":1,"public:\/\/languages\/es_BuI5tjHt6VGvNuEp8UnM6NJi_JF11hAVAXWWemRtcMs.js":1,"sites\/all\/modules\/colorbox\/js\/colorbox.js":1,"sites\/all\/modules\/colorbox\/styles\/default\/colorbox_style.js":1,"sites\/all\/libraries\/jquery.cycle\/jquery.cycle.all.js":1,"sites\/all\/modules\/views_slideshow\/contrib\/views_slideshow_cycle\/js\/views_slideshow_cycle.js":1,"sites\/all\/modules\/google_analytics\/googleanalytics.js":1,"1":1,"sites\/all\/themes\/escuelas_fje\/js\/topbar-menu-escuela.js":1,"sites\/all\/themes\/escuelas_fje\/js\/header-scroll-escuela.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"sites\/all\/modules\/views_slideshow\/views_slideshow.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/datepicker.1.7.css":1,"sites\/all\/modules\/domain\/domain_nav\/domain_nav.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/youtube\/css\/youtube.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/colorbox\/styles\/default\/colorbox_style.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"modules\/locale\/locale.css":1,"sites\/all\/modules\/views_slideshow\/contrib\/views_slideshow_cycle\/views_slideshow_cycle.css":1,"sites\/all\/modules\/eu_cookie_compliance\/css\/eu_cookie_compliance.css":1,"0":1,"sites\/all\/themes\/escuelas_fje\/..\/global_fje\/css\/comun.css":1,"sites\/all\/themes\/escuelas_fje\/..\/global_fje\/css\/colegio.css":1}},"colorbox":{"opacity":"0.85","current":"{current} de {total}","previous":"\u00ab Anterior","next":"Siguiente \u00bb","close":"Cerrar","maxWidth":"98%","maxHeight":"98%","fixed":true,"mobiledetect":true,"mobiledevicewidth":"480px"},"urlIsAjaxTrusted":{"\/es\/cerca":true},"viewsSlideshow":{"slideshow-block_1":{"methods":{"goToSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"nextSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"pause":["viewsSlideshowControls","viewsSlideshowCycle"],"play":["viewsSlideshowControls","viewsSlideshowCycle"],"previousSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"transitionBegin":["viewsSlideshowPager","viewsSlideshowSlideCounter"],"transitionEnd":[]},"paused":0}},"viewsSlideshowPager":{"slideshow-block_1":{"bottom":{"type":"viewsSlideshowPagerFields","master_pager":"0"}}},"viewsSlideshowPagerFields":{"slideshow-block_1":{"bottom":{"activatePauseOnHover":0}}},"viewsSlideshowCycle":{"#views_slideshow_cycle_main_slideshow-block_1":{"num_divs":4,"id_prefix":"#views_slideshow_cycle_main_","div_prefix":"#views_slideshow_cycle_div_","vss_id":"slideshow-block_1","effect":"fade","transition_advanced":0,"timeout":5000,"speed":700,"delay":0,"sync":1,"random":0,"pause":0,"pause_on_click":0,"play_on_hover":0,"action_advanced":0,"start_paused":0,"remember_slide":0,"remember_slide_days":1,"pause_in_middle":0,"pause_when_hidden":0,"pause_when_hidden_type":"full","amount_allowed_visible":"","nowrap":0,"pause_after_slideshow":0,"fixed_height":1,"items_per_slide":1,"wait_for_image_load":1,"wait_for_image_load_timeout":3000,"cleartype":0,"cleartypenobg":0,"advanced_options":"{}"}},"eu_cookie_compliance":{"popup_enabled":1,"popup_agreed_enabled":0,"popup_hide_agreed":0,"popup_clicking_confirmation":1,"popup_scrolling_confirmation":0,"popup_html_info":"\u003Cdiv\u003E\n  \u003Cdiv class =\u0022popup-content info\u0022\u003E\n    \u003Cdiv id=\u0022popup-text\u0022\u003E\n      \u003Ch2\u003EJesu\u00eftes Educaci\u00f3\u003C\/h2\u003E\u003Cp\u003E\u003Ca class=\u0022agree-button\u0022\u003ETancar\u003C\/a\u003E\u003C\/p\u003E\u003Cdiv class=\u0022clear\u0022\u003E\u003C\/div\u003E\u003Cp\u003EAquesta web utilitza galetes pr\u00f2pies i de tercers per mesurar i gestionar visites a la web, tamb\u00e9 per oferir una millor experi\u00e8ncia i servei. Si continueu de navegar considerem que accepta la seva utilitzaci\u00f3. Podeu canviar la configuraci\u00f3 i trobar m\u00e9s informaci\u00f3 sobre les normes de galetes al enlla\u00e7 seg\u00fcent \u003Ca href=\u0022\/avis-legal\u0022\u003Epol\u00edtica de Cookies\u003C\/a\u003E.\u003C\/p\u003E    \u003C\/div\u003E\n    \u003Cdiv id=\u0022popup-buttons\u0022\u003E\n      \u003Cbutton type=\u0022button\u0022 class=\u0022agree-button\u0022\u003EAcceptar\u003C\/button\u003E\n              \u003Cbutton type=\u0022button\u0022 class=\u0022find-more-button\u0022\u003ENo accepto\u003C\/button\u003E\n          \u003C\/div\u003E\n  \u003C\/div\u003E\n\u003C\/div\u003E","use_mobile_message":false,"mobile_popup_html_info":"\u003Cdiv\u003E\n  \u003Cdiv class =\u0022popup-content info\u0022\u003E\n    \u003Cdiv id=\u0022popup-text\u0022\u003E\n          \u003C\/div\u003E\n    \u003Cdiv id=\u0022popup-buttons\u0022\u003E\n      \u003Cbutton type=\u0022button\u0022 class=\u0022agree-button\u0022\u003EAcceptar\u003C\/button\u003E\n              \u003Cbutton type=\u0022button\u0022 class=\u0022find-more-button\u0022\u003ENo accepto\u003C\/button\u003E\n          \u003C\/div\u003E\n  \u003C\/div\u003E\n\u003C\/div\u003E\n","mobile_breakpoint":"768","popup_html_agreed":"\u003Cdiv\u003E\n  \u003Cdiv class =\u0022popup-content agreed\u0022\u003E\n    \u003Cdiv id=\u0022popup-text\u0022\u003E\n      \u003Ch2\u003EThank you for accepting cookies\u003C\/h2\u003E\u003Cp\u003EYou can now hide this message or find out more about cookies.\u003C\/p\u003E    \u003C\/div\u003E\n    \u003Cdiv id=\u0022popup-buttons\u0022\u003E\n      \u003Cbutton type=\u0022button\u0022 class=\u0022hide-popup-button\u0022\u003EOculta\u003C\/button\u003E\n              \u003Cbutton type=\u0022button\u0022 class=\u0022find-more-button\u0022 \u003EMore info\u003C\/button\u003E\n          \u003C\/div\u003E\n  \u003C\/div\u003E\n\u003C\/div\u003E","popup_use_bare_css":false,"popup_height":"auto","popup_width":"100%","popup_delay":1000,"popup_link":"\/es\/avis-legal","popup_link_new_window":1,"popup_position":null,"popup_language":"es","better_support_for_screen_readers":0,"reload_page":0,"domain":"","popup_eu_only_js":0,"cookie_lifetime":"100","disagree_do_not_show_popup":0},"googleanalytics":{"trackOutbound":1,"trackMailto":1,"trackDownload":1,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip","trackColorbox":1}});
//--><!]]>
</script>
	<!-- Detect Touch Device--->
	<script type="text/javascript">
		(function ($) {
		$( document ).ready(function() {
			var isTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;
			if(isTouch){ 
		   		$('.buscador').empty();
				$('.extranet').empty();
				$('.extranet').html('<div class="content"><a href="http://srv.net.fje.edu/lg/loginNET/ " target="_blank" style="right:0px; bottom:0px; margin-top:11px font-size:12px">Accés a NET</a></div>');
			}
		}); 
		})(jQuery);
    </script>
</head>
<body class="html front not-logged-in one-sidebar sidebar-first page-node domain-bellvitge-fje i18n-es eu-cookie-compliance-processed">
  <div id="skip-link">
    <a href="http://www.j23.fje.edu/es#main-content" class="element-invisible element-focusable">Pasar al contenido principal</a>
  </div>
    
<!--METATAGS -->

<!--INI REGION TOPMENU -->
<div id="topmenu">
              
</div>
<!--FIN REGION TOPMENU -->

<!--INI REGION TOPBAR -->
<div id="topbar">
    <div class="container">
            <div class="logo">
                <a href="http://www.fje.edu/"><img src="./otros/index/lg-jesuites-educacio.png" alt="Fundació Jesuïtes Educació"></a>
            </div>
            
            <div class="nav">
            	 <a id="ico-menu-escuela"><img class="ico-menu" src="./otros/index/ico-menu-off.png" alt="Fundació Jesuïtes Educació"></a>
                   <div class="region region-topbar">
    <div id="block-block-29" class="block block-block">

    
  <div class="content">
    <ul class="menu"><li class="first"><a class="fundacio" href="http://www.fje.edu/la-fundacio-jesuites-educacio">La Fundació Jesuïtes Educació</a></li><li><a class="educacio" href="http://www.fje.edu/l-educacio-que-oferim">L'educació que oferim</a></li><li><a class="escoles" href="http://www.fje.edu/les-nostres-escoles">Les nostres escoles</a></li><li class="last"><a href="http://www.fje.edu/innovacio-educativa">Innovació educativa</a></li></ul>  </div>
</div>
  </div>
             </div>
             
            <div class="caja-derecha">
                     
                <div class="botones">  
                      <div class="region region-header">
    <div id="block-views-exp-cercador-page" class="block block-views buscador">
				<div class="content">
		<div id="mainSearch">
			<img class="ico-busca" src="./otros/index/ico-busca.png">
			<form action="http://www.j23.fje.edu/es/cerca" method="get" id="views-exposed-form-cercador-page" accept-charset="UTF-8"><div><div class="views-exposed-form">
  <div class="views-exposed-widgets clearfix">
          <div id="edit-keys-wrapper" class="views-exposed-widget views-widget-filter-keys">
                        <div class="views-widget">
          <div class="form-item form-type-textfield form-item-keys">
 <input title="Escriba lo que quiere buscar." placeholder="Cercador" type="text" id="edit-keys" name="keys" value="" size="15" maxlength="128" class="form-text">
</div>
        </div>
              </div>
                    <div class="views-exposed-widget views-submit-button">
      <input type="submit" id="edit-submit-cercador" name="" value="Cerca" class="form-submit">    </div>
      </div>
</div>
</div></form>		</div>
	</div>
</div><div id="block-block-4" class="block block-block extranet">

    
  <div class="content">
    <div id="mainLogin">
	<div id="mainLoginwrapper">
        <img class="ico-busca" src="./otros/index/ico-net.png">
        <form id="login-form" action="conexion.proc.php" method="POST">
            <div class="loginBox">
            <input id="username" name="username" type="text" placeholder="Usuari">
            <input id="password" name="password" type="password" placeholder="Password">
            <!-- <input id="cpassword" name="cpassword" type="hidden" value=""> -->
            <input class="button" name="login" type="submit" value="Entrar" onclick="/*alert(&#39;Avui entre les 16h i les 17h hi ha previstes tasques de manteniment dels servidors de laNet. \nDurant aquest temps laNet tindrà afectacions del servei.\nDisculpeu les molèsties que aquest fet us pugui ocasionar&#39;);*/return true;">
            </div>
        </form>
	</div>
	<a id="recuperarClau" href="http://srv.net.fje.edu/chp/recpas" target="_blank">Has oblidat la clau?</a>
</div>  </div>
</div>
<div id="block-locale-language" class="block block-locale idiomas">

    
  <div class="content">
    <ul class="language-switcher-locale-url"><li class="ca first"><a href="http://www.j23.fje.edu/ca" class="language-link" xml:lang="ca">CAT</a></li>
<li class="en"><a href="http://www.j23.fje.edu/en" class="language-link" xml:lang="en">ENG</a></li>
<li class="es last active"><a href="http://www.j23.fje.edu/es" class="language-link active" xml:lang="es">ESP</a></li>
</ul>  </div>
</div>
  </div>
				</div>

            </div>
                
  </div>
</div>
<!--FIN REGION TOPBAR -->

<!--INI REGION TOPBAR ESCUELA -->
<div id="topbar-escuela" style="background-color:#FFF;">
    <div class="container">
            <div class="logo">
                <a href="http://www.j23.fje.edu/"><img src="./otros/index/logotop_bellvitge_fje.png"></a>
            </div>
            
            <div class="nav">
            	<!--<a id="ico-menu"><img class="ico-menu" src="/sites/all/themes/escuelas_fje/images/ico-menu-off.png" alt="Fundació Jesuïtes Educació"/></a>-->
                                    <ul id="main-menu" class="menu"><li class="menu-1320 first"><a href="http://www.j23.fje.edu/es/la-escuela" class="escuela">La escuela</a></li>
<li class="menu-1336"><a href="http://www.j23.fje.edu/es/oferta-educativa" class="oferta-es">Oferta educativa</a></li>
<li class="menu-2952"><a href="http://www.j23.fje.edu/es/actividades-paraescolares" class="actividades">Actividades paraescolares</a></li>
<li class="menu-2949"><a href="http://www.j23.fje.edu/es/servicios">Servicios</a></li>
<li class="menu-2921 last"><a href="http://www.j23.fje.edu/es/admisiones" class="preinscripciones">Información y admisiones</a></li>
</ul>                             </div>
             
            <div class="caja-derecha">
                     
                <div class="botones">  
                      <div class="region region-header">
      <div class="region region-header">
    <div id="block-views-exp-cercador-page" class="block block-views buscador">
				<div class="content">
		<div id="mainSearch">
			<img class="ico-busca" src="/sites/all/themes/global_fje/images/ico-busca.png">
			<form action="/es/cerca" method="get" id="views-exposed-form-cercador-page" accept-charset="UTF-8"><div><div class="views-exposed-form">
  <div class="views-exposed-widgets clearfix">
          <div id="edit-keys-wrapper" class="views-exposed-widget views-widget-filter-keys">
                        <div class="views-widget">
          <div class="form-item form-type-textfield form-item-keys">
 <input title="Escriba lo que quiere buscar." placeholder="Cercador" type="text" id="edit-keys" name="keys" value="" size="15" maxlength="128" class="form-text" />
</div>
        </div>
              </div>
                    <div class="views-exposed-widget views-submit-button">
      <input type="submit" id="edit-submit-cercador" name="" value="Cerca" class="form-submit" />    </div>
      </div>
</div>
</div></form>		</div>
	</div>
</div><div id="block-block-4" class="block block-block extranet">

    
  <div class="content">
    <div id="mainLogin">
	<div id="mainLoginwrapper">
        <img class="ico-busca" src="/sites/all/themes/escuelas_fje/images/ico-net.png"/>
        <form id="login-form" action="https://srv.net.fje.edu/lg/lg.php" enctype="application/x-www-form-urlencoded" method="post" onsubmit="rsaEncrypt()">
            <div class="loginBox">
            <input id="username" name="username"  type="text" placeholder="Usuari">
            <input id="password" name="password" type="password" placeholder="Password">
            <input id="cpassword" name="cpassword" type="hidden" value=""></td>
            <input class="button" name="action" type="submit" value="Entrar" onClick="/*alert('Avui entre les 16h i les 17h hi ha previstes tasques de manteniment dels servidors de laNet. \nDurant aquest temps laNet tindrà afectacions del servei.\nDisculpeu les molèsties que aquest fet us pugui ocasionar');*/return true;">
            </div>
        </form>
	</div>
	<a id="recuperarClau" href="http://srv.net.fje.edu/chp/recpas" target="_blank">Has oblidat la clau?</a>
</div>  </div>
</div>
<div id="block-locale-language" class="block block-locale idiomas">

    
  <div class="content">
    <ul class="language-switcher-locale-url"><li class="ca first"><a href="/ca" class="language-link" xml:lang="ca">CAT</a></li>
<li class="en"><a href="/en" class="language-link" xml:lang="en">ENG</a></li>
<li class="es last active"><a href="/es" class="language-link active" xml:lang="es">ESP</a></li>
</ul>  </div>
</div>
  </div>
  </div>

				</div>

            </div>
                
  </div>
</div>
<!--FIN REGION TOPBAR ESCUELA -->


<!--INI REGION HEADER -->
<div id="header">

    <!-- caja top -->
    <div class="caja-top">
         <div class="container">
         
                <div class="contacta-top">
                	<a href="http://www.j23.fje.edu/contacte"><img src="./otros/index/ico-header-contacta.png" alt="contacta"></a>
                </div>
                     
                <ul class="redes-top">
                    <li><a href="https://www.facebook.com/JesuitesBellvitge" target="_blank"><img src="./otros/index/ico-header-facebook.png" alt="facebook"></a></li>
                    <li><a href="https://twitter.com/hashtag/JEbellvitge" target="_blank"><img src="./otros/index/ico-header-twitter.png" alt="twitter"></a></li>
                    <li><a href="http://instagram.com/jesuitesedu" target="_blank"><img src="./otros/index/ico-header-instagram.png" alt="twitter"></a></li>
                    <!--<li><a href="#"><img src="/sites/all/themes/escuelas_fje/images/ico-header-youtube.png" alt="youtube"/></a></li>-->
                </ul>

                                       <ul id="secondary-menu" class="menu-top"><li class="menu-1642 first"><a href="http://www.j23.fje.edu/es/actualidad" title="">Actualidad</a></li>
<li class="menu-1640"><a href="http://www.j23.fje.edu/es/node/104" title="">Actualitat</a></li>
<li class="menu-1521"><a href="http://www.j23.fje.edu/es/alumni">Alumni</a></li>
<li class="menu-1514 last"><a href="http://www.j23.fje.edu/es/las-familias-participan">Las familias participan</a></li>
</ul>                                
                
            </div>
   </div>
   
   
   

            
            
    <div class="container">         
            <div class="logo">
                    <a href="http://www.j23.fje.edu/es" title="Inicio" rel="home"><img src="./otros/index/logo_bellvitge_fje.png" alt="Logotipo Fundación Jesuitas Educación"></a>
      
            </div>
            
			<ul class="menu"><li class="first expanded"><a href="http://www.j23.fje.edu/es/la-escuela" class="escuela">La escuela</a><ul class="menu"><li class="first leaf"><a href="http://www.j23.fje.edu/es/la-escuela/quienes-somos">¿Quiénes somos?</a></li>
<li class="leaf"><a href="http://www.j23.fje.edu/es/la-escuela/equipo">Equipo</a></li>
<li class="leaf"><a href="http://www.j23.fje.edu/es/la-escuela/instalaciones-y-equipamientos">Instalaciones y equipamientos</a></li>
<li class="leaf"><a href="http://www.j23.fje.edu/es/la-escuela/la-escuela-en-cifras">La escuela en cifras</a></li>
<li class="leaf"><a href="http://www.j23.fje.edu/es/la-escuela/la-educacion-que-ofrecemos">La educación que ofrecemos</a></li>
<li class="last leaf"><a href="http://www.j23.fje.edu/es/la-escuela/entidades-hermanas">Entidades hermanas</a></li>
</ul></li>
<li class="expanded"><a href="http://www.j23.fje.edu/es/oferta-educativa" class="oferta-es">Oferta educativa</a><ul class="menu"><li class="first leaf"><a href="http://www.j23.fje.edu/es/oferta-educativa/el-proyecto-educativo-del-centro">El proyecto educativo del centro</a></li>
<li class="collapsed"><a href="http://www.j23.fje.edu/es/oferta-educativa/infantil">Infantil</a></li>
<li class="collapsed"><a href="http://www.j23.fje.edu/es/oferta-educativa/primaria">Primaria</a></li>
<li class="collapsed"><a href="http://www.j23.fje.edu/es/oferta-educativa/eso">ESO</a></li>
<li class="collapsed"><a href="http://www.j23.fje.edu/es/oferta-educativa/bachillerato">Bachillerato</a></li>
<li class="last leaf"><a href="http://www.formacioprofessional.com/programes/cerca/campus/3" class="enllac-extern" target="_blank">Formación profesional</a></li>
</ul></li>
<li class="leaf"><a href="http://www.j23.fje.edu/es/actividades-paraescolares" class="actividades">Actividades paraescolares</a></li>
<li class="leaf"><a href="http://www.j23.fje.edu/es/servicios">Servicios</a></li>
<li class="last leaf"><a href="http://www.j23.fje.edu/es/admisiones" class="preinscripciones">Información y admisiones</a></li>
</ul> 
                
  </div>
</div>
<!--FIN REGION HEADER -->


    <!--INI SLIDE  -->
    <img src="img/slider/slide03.jpg" width="1349" alt="600">
    <!--FIN SLIDE  -->

    <!-- INI DESTACADOS -->
    <div class="container">        
            <div id="destacados">
                      <div class="region region-highlighted">
    <div id="block-block-25" class="block block-block">

    
  <div class="content">
                <h1>Descubre</h1>
            <ul>
                <li>
                    <a href="http://www.j23.fje.edu/es/la-escuela/quienes-somos"><img src="./otros/index/destacado01-bellvitge.jpg"></a>
                    <p><a href="http://www.j23.fje.edu/es/la-escuela/quienes-somos">Comprometidos contigo</a></p>
                </li>
                <li>
                    <a href="http://www.j23.fje.edu/es/la-escuela/instalaciones-y-equipamientos"><img src="./otros/index/destacado02-bellvitge.jpg"></a>
                    <p><a href="http://www.j23.fje.edu/es/la-escuela/instalaciones-y-equipamientos">Nuevas instalaciones</a></p>
                </li>         
               <li class="last">
                    <a href="http://www.j23.fje.edu/es/oferta-educativa"><img src="./otros/index/destacado03-bellvitge.jpg"></a>
                    <p><a href="http://www.j23.fje.edu/es/oferta-educativa">Educamos para la sociedad del siglo XXI</a></p>
                </li>
            </ul>  </div>
</div>
  </div>
            </div>  
    </div>
    <!--FIN DESTACADOS-->
                    

	<!-- INI MIDDLE -->
    <div id="middle">
		<div class="container">    
        	      <div class="region region-middle">
    <div id="block-block-26" class="block block-block">

    
  <div class="content">
    <div id="escuela">
                <div class="colegio">
                               <h1>Estudiar en <strong>Jesuitas Bellvitge</strong></h1>
            <p>Desde Jesuitas Bellvitge – C.E. Joan XIII nos comprometemos con nuestros alumnos y con las familias a potenciar las capacidades de nuestros alumnos, motivando el desarrollo de las facultades internas y ayudandoles a adquirir recursos propios para ser autónomos. Creemos en un modelo social en el que las personas convivan con los demás y para los demás.</p>
            <a class="boton" href="http://www.j23.fje.edu/es/oferta-educativa/el-proyecto-educativo-del-centro">Nuestro proyecto educativo</a>
                </div>
                <div class="foto">
                    <a href="http://www.j23.fje.edu/es#">
                        <img src="./otros/index/escuela-bellvitge_520x350.jpg">
                        <div class="caption"><h2>Centro de Estudios Joan XXIII</h2><span>Av. Mare de Déu de Bellvitge 100-110. 08907 L'Hospitalet. Tel. 933 351 543 </span></div>
                    </a>
                </div>
                
                <ul class="etapas">
                    <li><a href="http://www.j23.fje.edu/es/oferta-educativa/infantil">Educación Infantil</a></li>
                    <li><a href="http://www.j23.fje.edu/es/oferta-educativa/primaria">Educación Primaria</a></li>
                    <li><a href="http://www.j23.fje.edu/es/oferta-educativa/eso">Educación Secundaria</a></li>
                    <li><a href="http://www.j23.fje.edu/es/oferta-educativa/bachillerato">Bachillerato</a></li>
                    <li><a href="http://www.j23.fje.edu/es/oferta-educativa/formacion-profesional">Ciclos formativos</a></li>
                </ul>
</div>  </div>
</div>
  </div>
   		</div>                    
	</div>
	<!-- FIN MIDDLE-->
    
    
    




    <!-- INI CUERPO -->
    <div class="container">    
	        			
            <div class="b8_4_col1">
                <div id="cuerpo">                    
                      <div class="region region-bottom">
    <div id="block-views-noticias-block" class="block block-views">

    
  <div class="content">
    <div class="view view-noticias view-id-noticias view-display-id-block view-dom-id-9761b6f705c4ddf80aee62c318dacb76">
            <div class="view-header">
      <h1>Noticias <span><a href="http://www.j23.fje.edu/es/actualitat">Todas las noticias</a></span></h1>
    </div>
  
  
  
      <div class="view-content">
          <ul class="noticias">          <li class="views-row-odd views-row-first noticia-escola">  
  <div>        <div><a href="http://www.j23.fje.edu/es/node/12116"><img typeof="foaf:Image" src="./otros/index/logo_cursa_ampa.jpg" width="96" height="96" alt=""></a></div>  </div>  
  <div>        <h2><a href="http://www.j23.fje.edu/ca/noticies/0000012116-inscripcions-obertes-la-cursa-popular-bellvitge-2018">Inscripcions obertes a la Cursa Popular Bellvitge 2018</a></h2>  </div>  
  <div>        <div class="info"><span class="colegi"><a href="http://www.j23.fje.edu/es/origen/bellvitge" typeof="skos:Concept" property="rdfs:label skos:prefLabel">Bellvitge</a></span> <span class="categoria"></span> <span class="fecha">26/04/2018</span>
</div>  </div></li>
          <li class="views-row-even noticia-escola">  
  <div>        <div><a href="http://www.j23.fje.edu/es/node/12100"><img typeof="foaf:Image" src="./otros/index/book.png" width="96" height="96" alt=""></a></div>  </div>  
  <div>        <h2><a href="http://www.j23.fje.edu/ca/noticies/actualitat/0000012100-inventem-un-llibre">Inventem un llibre?</a></h2>  </div>  
  <div>        <div class="info"><span class="colegi"><a href="http://www.j23.fje.edu/es/origen/bellvitge" typeof="skos:Concept" property="rdfs:label skos:prefLabel">Bellvitge</a></span> <span class="categoria"><a href="http://www.j23.fje.edu/es/categorias/actualitat" typeof="skos:Concept" property="rdfs:label skos:prefLabel">Actualidad</a></span> <span class="fecha">19/04/2018</span>
</div>  </div></li>
          <li class="views-row-odd noticia-escola">  
  <div>        <div><a href="http://www.j23.fje.edu/es/node/12015"><img typeof="foaf:Image" src="./otros/index/icon_hort.jpg" width="96" height="96" alt=""></a></div>  </div>  
  <div>        <h2><a href="http://www.j23.fje.edu/ca/noticies/eso/0000012015-canvi-destacio-noves-plantacions">Canvi d'estació, noves plantacions!</a></h2>  </div>  
  <div>        <div class="info"><span class="colegi"><a href="http://www.j23.fje.edu/es/origen/bellvitge" typeof="skos:Concept" property="rdfs:label skos:prefLabel">Bellvitge</a></span> <span class="categoria"><a href="http://www.j23.fje.edu/es/categorias/eso" typeof="skos:Concept" property="rdfs:label skos:prefLabel">ESO</a></span> <span class="fecha">22/03/2018</span>
</div>  </div></li>
          <li class="views-row-even views-row-last noticia-escola">  
  <div>        <div><a href="http://www.j23.fje.edu/es/node/12008"><img typeof="foaf:Image" src="./otros/index/icon_cursa_entreculturas_2018.jpg" width="96" height="96" alt=""></a></div>  </div>  
  <div>        <h2><a href="http://www.j23.fje.edu/ca/noticies/actualitat/0000012008-entrecultures-corre-una-causa">Entrecultures: Corre per una causa</a></h2>  </div>  
  <div>        <div class="info"><span class="colegi"><a href="http://www.j23.fje.edu/es/origen/bellvitge" typeof="skos:Concept" property="rdfs:label skos:prefLabel">Bellvitge</a></span> <span class="categoria"><a href="http://www.j23.fje.edu/es/categorias/actualitat" typeof="skos:Concept" property="rdfs:label skos:prefLabel">Actualidad</a></span> <span class="fecha">21/03/2018</span>
</div>  </div></li>
      </ul>    </div>
  
  
  
  
  
  
</div>  </div>
</div>
  </div>
                </div>
            </div>
            
            <div class="b8_4_col2">
                
                <!-- ini sidebar-->
				                <div id="sidebar">
                    <div class="region region-sidebar-first">
    <div id="block-views-agenda-block" class="block block-views">

    
  <div class="content">
    <div class="view view-agenda view-id-agenda view-display-id-block view-dom-id-e93c06e1797c88ec4bd08edfc914611c">
            <div class="view-header">
      <h1>Agenda <span><a href="http://www.j23.fje.edu/es/actualitat">Todas las citas</a></span></h1>
    </div>
  
  
  
      <div class="view-content">
          <ul class="agenda">          <li class="views-row-odd views-row-first">  
  <div class="views-field views-field-nothing">        <span class="field-content"><div class="fecha bg_bellvitge_fje"><span class="dia"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2018-05-08T18:00:00+02:00">Mar</span></span><span class="num"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2018-05-08T18:00:00+02:00">08</span></span><span class="mes"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2018-05-08T18:00:00+02:00">Mayo</span></span></div></span>  </div>  
  <div>        <span class="titular"><a href="http://www.j23.fje.edu/ca/events/fp/0000011924-sessio-informativa-formacio-professional">Sessió Informativa Formació Professional</a></span>  </div></li>
          <li class="views-row-even">  
  <div class="views-field views-field-nothing">        <span class="field-content"><div class="fecha bg_bellvitge_fje"><span class="dia"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2018-05-08T18:00:00+02:00">Mar</span></span><span class="num"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2018-05-08T18:00:00+02:00">08</span></span><span class="mes"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2018-05-08T18:00:00+02:00">Mayo</span></span></div></span>  </div>  
  <div>        <span class="titular"><a href="http://www.j23.fje.edu/ca/events/batxillerat/0000011923-sessio-informativa-batxillerat">Sessió Informativa Batxillerat</a></span>  </div></li>
          <li class="views-row-odd">  
  <div class="views-field views-field-nothing">        <span class="field-content"><div class="fecha bg_bellvitge_fje"><span class="dia"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2018-05-13T10:30:00+02:00">Dom</span></span><span class="num"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2018-05-13T10:30:00+02:00">13</span></span><span class="mes"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2018-05-13T10:30:00+02:00">Mayo</span></span></div></span>  </div>  
  <div>        <span class="titular"><a href="http://www.j23.fje.edu/ca/events/actualitat/0000012115-cursa-popular-bellvitge">Cursa Popular Bellvitge</a></span>  </div></li>
          <li class="views-row-even views-row-last">  
  <div class="views-field views-field-nothing">        <span class="field-content"><div class="fecha bg_bellvitge_fje"><span class="dia"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2018-05-16T18:00:00+02:00">Mié</span></span><span class="num"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2018-05-16T18:00:00+02:00">16</span></span><span class="mes"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2018-05-16T18:00:00+02:00">Mayo</span></span></div></span>  </div>  
  <div>        <span class="titular"><a href="http://www.j23.fje.edu/ca/events/fp/0000011925-sessio-informativa-formacio-professional">Sessió Informativa Formació Professional</a></span>  </div></li>
      </ul>    </div>
  
  
  
  
  
  
</div>  </div>
</div>
  </div>
                </div>
                                <!-- fin sidebar-->
              
            </div>
      
    </div>
    <!-- FIN CUERPO -->



    
    <!-- INI REGION FOOTER  -->       
    <div id="footer">
        <div class="container">
                    
                    <div class="logo">
                        <a href="http://www.fje.edu/" target="_blank"><img src="./otros/index/logo-pie.png"></a>
                    </div>
                    
                    <div class="menu-copyright">
                      	    <ul class="menu">
                                <li class="first"><a href="http://www.fje.edu/es/la-fundacion-jesuitas-educacion" target="_blank">La Fundación Jesuites Educació</a> </li>
                                <li><a href="http://www.fje.edu/es/trabaja-con-nosotros" target="_blank">Trabaja con nosotros</a> </li>
                                <li><a href="http://www.j23.fje.edu/es/aviso-legal">Aviso legal</a> </li>
                                <li><a href="http://www.j23.fje.edu/es/aviso-legal#privacitat">Política de privacidad</a> </li>
                                <li><a href="http://www.j23.fje.edu/es/contacta">Contacta</a> </li>
                            </ul>
                            <div class="copyright">
                                © 2018 Fundació Jesuïtes Educació<br><br><br>
                                Baked by <a href="http://www.digitalbakers.com/" target="_blank">Digital Bakers</a>
                            </div>
                    </div>
                   
                     <div class="region region-footer">
    <div id="block-block-2" class="block block-block">

    
  <div class="content">
                        <div class="redes">
                        <span>Conecta con nosotros</span>
                        <ul>
                            <li><a href="https://www.youtube.com/channel/UCh3CVlavlAb6jMoQ_46RO5w" target="_blank"><img src="./otros/index/ico-youtube.png"></a></li>
                            <li><a href="http://instagram.com/jesuitesedu" target="_blank"><img src="./otros/index/ico-instagram.png"></a></li>
                            <li><a href="https://twitter.com/JesuitesEdu" target="_blank"><img src="./otros/index/ico-twitter.png"></a></li>
                            <li><a href="https://www.facebook.com/JesuitesEducacio" target="_blank"><img src="./otros/index/ico-facebook.png"></a></li>
                       </ul>
                   </div>  </div>
</div>
  </div>

        </div>
    </div>
    <!-- FIN REGION FOOTER  -->  
  <script type="text/javascript">
<!--//--><![CDATA[//><!--
var eu_cookie_compliance_cookie_name = "";
//--><!]]>
</script>
<script type="text/javascript" src="./otros/index/eu_cookie_compliance.js.descarga"></script>


</body>
</html>
