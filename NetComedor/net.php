<?php 
session_start();
include("conexion.proc.php");
if (!isset($_SESSION['mail_usuario'])) {
    header('location: index.php');
} else {
    $_SESSION['id_usuario'];
    $_SESSION['nombre_usuario'];
    $_SESSION['apellido_usuario'];
    $_SESSION['tipo_usuario'];
    $_SESSION['mail_usuario'];
    $_SESSION['admin'];
    ?>
    <!DOCTYPE html> <!-- saved from url=(0035)http://srv.net.fje.edu/net2/#/lanet -->
    <link rel="shortcut icon" href="http://www.j23.fje.edu/sites/all/themes/escuelas_fje/images/favicon_bellvitge_fje.ico" type="image/vnd.microsoft.icon"> 
    <html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths boxsizing translated-ltr" data-livestyle-extension="available" style=""><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html;
        charset=UTF-8"><style type="text/css">@charset "UTF-8";

        [ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{
            display:none !important;
        }
        ng\:form{
            display:block;
        }
        .ng-animate-block-transitions{
            transition:0s all!important;
            -webkit-transition:0s all!important;
        }
    </style><title>LaNET - Jesuitas Educación</title><meta name="description" content=""><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"><meta name="apple-mobile-web-app-capable" content="yes"><!-- Place favicon.ico and apple-touch-icon.png in the root directory --><link rel="stylesheet" href="./LaNeta - Jesuitas Educación_files/screen.css"> <link rel="stylesheet" href="./LaNeta - Jesuitas Educación_files/icons.data.svg.css" media="all"><script type="text/javascript" async="" src="./LaNeta - Jesuitas Educación_files/analytics.js.descarga"></script><script async="" src="./LaNeta - Jesuitas Educación_files/gtm.js.descarga"></script><script>
        /* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
        window.grunticon=function(e){
            if(e&&3===e.length){
                var t=window,n=!(!t.document.createElementNS||!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||window.opera&&-1===navigator.userAgent.indexOf("Chrome")),o=function(o){
                    var a=t.document.createElement("link"),r=t.document.getElementsByTagName("script")[0];
                    a.rel="stylesheet",a.href=e[o&&n?0:o?1:2],a.media="only x",r.parentNode.insertBefore(a,r),setTimeout(function(){
                        a.media="all"
                    }
                    )
                }
                ,a=new t.Image;
                a.onerror=function(){
                    o(!1)
                }
                ,a.onload=function(){
                    o(1===a.width&&1===a.height)
                }
                ,a.src="data:image/gif;
        base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="
    }
}
;
grunticon(["images/sprite/icons.data.svg.css", "images/sprite/icons.data.png.css", "images/sprite/icons.fallback.css"]);
</script><noscript><link href="images/sprite/icons.fallback.css" rel="stylesheet"></noscript><link href="./LaNeta - Jesuitas Educación_files/css" rel="stylesheet" type="text/css"><script src="./LaNeta - Jesuitas Educación_files/modernizr.js.descarga"></script><link type="text/css" rel="stylesheet" charset="UTF-8" href="./LaNeta - Jesuitas Educación_files/translateelement.css"></head><body ng-app="lanetApp" class="ng-scope" ng-class="{
&#39;
has--sidebar&#39;
: sidebar.opened, &#39;
has--detail&#39;
: detail.hasDetail, &#39;
has--detail-lvl2&#39;
: detail.hasDetailLVL2, &#39;
has--lightbox&#39;
: lightbox.hasLightbox, &#39;
had--detail-lvl2&#39;
: detail.hadDetailLVL2, &#39;
is--role-teacher&#39;
: $root.user.isRoleTeacher(), &#39;
favorites--edit&#39;
: favorites_sidebar.active, &#39;
has--alert&#39;
: alert.opened
}
"><!--[if lt IE 7]> <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p> <![endif]--><div id="right-top-2" style="background-color:Brown;
height:30px;
width:100%;
text-align:center;
display:none"><iframe width="100%" scrolling="none" align="middle" height="100%" src="./LaNeta - Jesuitas Educación_files/ig.html"></iframe></div><script>var child = document.createElement("iframe");
child.width="100%";
child.scrolling="none";
child.align="middle";
child.height="100%";
child.frameborder="0";
child.src="https://www.google.com/calendar/hosted/fje.edu/ig";
document.getElementById('right-top-2').appendChild(child);
</script><!-- Add your site or application content here --><user-info><div class="page-header clearfix ng-scope" ng-controller="UserInfo" data-ga-category="Header"><div class="brand clearfix"><div class="brand__lanet"><img src="./LaNeta - Jesuitas Educación_files/logo_lanet.svg" alt="La red"></div><div class="brand__school"><img src="./LaNeta - Jesuitas Educación_files/logo_fje.svg" alt="Fundación Jesuitas Educación"></div></div><div class="login"><a class="help" ng-hide="$root.servicesFailed &amp;
    &amp;
    $root.familyFailed &amp;
    &amp;
    $root.groupsFailed &amp;
    &amp;
    $root.modalFailed" ng-click="tutorial.open()"></a><div class="login__user"><img ng-src="" ng-show="user.avatar !== undefined" alt="avatar del usuario" class="login__avatar ng-hide"> <span class="login__username ng-binding"><?php echo $_SESSION['nombre_usuario']." ".$_SESSION['apellido_usuario']?></span></div><div class="login__controls"><a href="<?php session_destroy() ?>"><img src="./img/net/logout.jpg"/></a></div></div></div></user-info><modal><div ng-controller="Modal" class="lightbox is--visible ng-scope"><a href="http://srv.net.fje.edu/net2/" class="lightbox__close ir" ng-click="lightbox.hideLightbox();
        ">Cerrar</a><div class="lightbox__inner"><a target="_blank" ng-href=""><img ng-src="" alt=""></a></div></div></modal><error-message><div ng-show="$root.servicesFailed &amp;
            &amp;
            $root.familyFailed &amp;
            &amp;
            $root.groupsFailed &amp;
            &amp;
            $root.modalFailed" class="page-wrapper-403 clearfix hidden ng-hide" ng-class="{
            &#39;
            hidden&#39;
            : !($root.servicesFailed &amp;
            &amp;
            $root.familyFailed &amp;
            &amp;
            $root.groupsFailed &amp;
            &amp;
            $root.modalFailed)
        }
        "><div class="error-403"><div class="error-403__content"><div class="image"><img src="./LaNeta - Jesuitas Educación_files/e8143e83.error403_dog.png" alt="Error 403"></div><div class="message"><p class="copy"><font style="vertical-align: inherit;
        "><font style="vertical-align: inherit;
        ">Lo sentimos, </font></font><span><font style="vertical-align: inherit;
        "><font style="vertical-align: inherit;
        ">el perro se ha comido nuestros deberes.</font></font></span></p><img src="./LaNeta - Jesuitas Educación_files/error403_logo.svg" alt="La red"><p class="cat"><font style="vertical-align: inherit;
        "><font style="vertical-align: inherit;
        ">no está disponible en este momento, por favor intenta de nuevo más tarde.</font></font></p></div></div></div></div></error-message><div ng-hide="$root.servicesFailed &amp;
        &amp;
        $root.familyFailed &amp;
        &amp;
        $root.groupsFailed &amp;
        &amp;
        $root.modalFailed" class=""><!-- ngView: --><div class="page-wrapper ng-scope" ng-view=""><div class="services-list__wrap ng-scope"><div class="services-list clearfix"><div class="search"><form ng-class="{
            &#39;
            has--text&#39;
            : query
        }
        " class="search__form ng-scope ng-pristine ng-valid" ng-controller="Search"><input type="text" ng-model="query" ng-keyup="search()" class="search__input ng-pristine ng-valid" placeholder="Cercar..."><button ng-click="clear_search()"></button></form></div></div><favorites><div class="favorites clearfix ng-scope" ng-controller="FavoritesList"><div class="favorites__wrap"><div class="favorites__overflow"><div class="favorites__overflow-wrapper"><div class="favorites__header"><span class="favorites__title"><font style="vertical-align: inherit;
        "><font style="vertical-align: inherit;
        ">Favorits </font></font></span> <span class="favorites__total ng-binding"><font style="vertical-align: inherit;
        "><font style="vertical-align: inherit;
        ">0/10</font></font></span> <button class="favorites__button is--add" ng-hide="favorites_sidebar.hasItems()" ng-click="favorites_sidebar.toggle()"><font style="vertical-align: inherit;
        "><font style="vertical-align: inherit;
        ">Añadir </font></font><img src="./LaNeta - Jesuitas Educación_files/icon-edit-lightblue.svg" class="is--off"><img src="./LaNeta - Jesuitas Educación_files/icon-edit-blue.svg" class="is--on"></button> <button class="favorites__button is--edit ng-hide" ng-show="favorites_sidebar.hasItems()" ng-click="favorites_sidebar.toggle()">Editar <img src="./LaNeta - Jesuitas Educación_files/icon-edit-lightblue.svg" class="is--off"><img src="./LaNeta - Jesuitas Educación_files/icon-edit-blue.svg" class="is--on"></button></div><div class="favorites__content"><!-- ngRepeat: (id, item) in $root.favorites track by $index --></div><div class="favorites__empty" ng-hide="$root.favorites.length &gt;
        = favorites_sidebar.maxItems()"><a ng-click="favorites_sidebar.toggle();
        "><img src="./LaNeta - Jesuitas Educación_files/icon-add-service.svg"></a></div></div></div></div></div></favorites><div class="services-list clearfix ng-hide" data-ga-category="Group" data-ga-action="Open" ng-show="thereAreElementsShown($root.family)"><!-- ngRepeat: (id, item) in $root.family --></div><div class="services-list clearfix" data-ga-category="Group" data-ga-action="Open" ng-show="thereAreElementsShown($root.groups)"><!-- ngRepeat: (id, item) in $root.groups --><div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.groups"><div service-item="" ng-click="sidebar.close();
            show(item);
            " data-ga-track="" ng-attr-data-ga-label="{
            {
               item.ID 
           }
       }
       " ng-attr-data-content="{
       {
           item.tooltip() 
       }
   }
   " ng-show="item.shown" class="service-item is--tutorship-1 has--content has--tooltip" ng-class="{
   &#39;
   has--content&#39;
   : item.isGroup() || item.contents, &#39;
   has--spinner&#39;
   : !item.isLoaded(), &#39;
   has--external&#39;
   : item.link &amp;
   &amp;
   item.isLoaded(), &#39;
   has--tooltip&#39;
   : item.tooltip() 
}
" data-ga-label="tutoria.2a.daw_cfs.17.joan23" data-content="tutoria 2a daw_cfs 17 joan23"><!-- ngIf: item.link --> <!-- ngIf: !item.link --><a service-icon="" href="http://srv.net.fje.edu/net2/" target="_blank" class="nav__label ng-scope" ng-if="!item.link" ng-click="logger.logService(item, null, user)"><span class="service-item__name-wrap"><span class="service-item__icon"><span ng-show="$root.hasImage(item.icon()) &amp;
    &amp;
    item.image() === undefined" class="icon icon-tutorship"></span> <!-- ngIf: item.image() --></span> <span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding ng-hide"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">(1</font></font></span><div class="service-item__name"><!-- ngIf: !favorite --><div ng-if="!favorite" class="ng-scope ng-binding"><font style="vertical-align: inherit;
        "><font style="vertical-align: inherit;
        ">(17) DAW2 Tutoría y proyectos</font></font></div><!-- end ngIf: !favorite --><!-- ngIf: favorite --></div></span> <!-- ngIf: item.tag --></a><!-- end ngIf: !item.link --> <span ng-class="{
        &#39;
        favorites__add&#39;
        : !favorite, &#39;
        favorites__remove&#39;
        : favorite
    }
    " ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span> <!-- ngIf: !item.loaded --></div></div><!-- end ngRepeat: (id, item) in $root.groups --><div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.groups"><div service-item="" ng-click="sidebar.close();
        show(item);
        " data-ga-track="" ng-attr-data-ga-label="{
        {
           item.ID 
       }
   }
   " ng-attr-data-content="{
   {
       item.tooltip() 
   }
}
" ng-show="item.shown" class="service-item is--global-1 has--content has--tooltip" ng-class="{
&#39;
has--content&#39;
: item.isGroup() || item.contents, &#39;
has--spinner&#39;
: !item.isLoaded(), &#39;
has--external&#39;
: item.link &amp;
&amp;
item.isLoaded(), &#39;
has--tooltip&#39;
: item.tooltip() 
}
" data-ga-label="modul3programacio.1.daw_cfs.17.joan23" data-content="modul3programacio 1 daw_cfs 17 joan23"><!-- ngIf: item.link --> <!-- ngIf: !item.link --><a service-icon="" href="http://srv.net.fje.edu/net2/" target="_blank" class="nav__label ng-scope" ng-if="!item.link" ng-click="logger.logService(item, null, user)"><span class="service-item__name-wrap"><span class="service-item__icon"><span ng-show="$root.hasImage(item.icon()) &amp;
    &amp;
    item.image() === undefined" class="icon icon-group"></span> <!-- ngIf: item.image() --></span> <span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding ng-hide"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Mo</font></font></span><div class="service-item__name"><!-- ngIf: !favorite --><div ng-if="!favorite" class="ng-scope ng-binding"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Módulo 3: Programación (DAW)</font></font></div><!-- end ngIf: !favorite --><!-- ngIf: favorite --></div></span> <!-- ngIf: item.tag --></a><!-- end ngIf: !item.link --> <span ng-class="{
    &#39;
    favorites__add&#39;
    : !favorite, &#39;
    favorites__remove&#39;
    : favorite
}
" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span> <!-- ngIf: !item.loaded --></div></div><!-- end ngRepeat: (id, item) in $root.groups --><div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.groups"><div service-item="" ng-click="sidebar.close();
    show(item);
    " data-ga-track="" ng-attr-data-ga-label="{
    {
       item.ID 
   }
}
" ng-attr-data-content="{
{
   item.tooltip() 
}
}
" ng-show="item.shown" class="service-item is--global-2 has--content has--tooltip" ng-class="{
&#39;
has--content&#39;
: item.isGroup() || item.contents, &#39;
has--spinner&#39;
: !item.isLoaded(), &#39;
has--external&#39;
: item.link &amp;
&amp;
item.isLoaded(), &#39;
has--tooltip&#39;
: item.tooltip() 
}
" data-ga-label="modul5entornsdedesenvolupament.1.daw_cfs.17.joan23" data-content="modul5entornsdedesenvolupament 1 daw_cfs 17 joan23"><!-- ngIf: item.link --> <!-- ngIf: !item.link --><a service-icon="" href="http://srv.net.fje.edu/net2/" target="_blank" class="nav__label ng-scope" ng-if="!item.link" ng-click="logger.logService(item, null, user)"><span class="service-item__name-wrap"><span class="service-item__icon"><span ng-show="$root.hasImage(item.icon()) &amp;
    &amp;
    item.image() === undefined" class="icon icon-group"></span> <!-- ngIf: item.image() --></span> <span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding ng-hide"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Mo</font></font></span><div class="service-item__name"><!-- ngIf: !favorite --><div ng-if="!favorite" class="ng-scope ng-binding"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Módulo 5: Entornos de desarrollo.</font></font></div><!-- end ngIf: !favorite --><!-- ngIf: favorite --></div></span> <!-- ngIf: item.tag --></a><!-- end ngIf: !item.link --> <span ng-class="{
    &#39;
    favorites__add&#39;
    : !favorite, &#39;
    favorites__remove&#39;
    : favorite
}
" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span> <!-- ngIf: !item.loaded --></div></div><!-- end ngRepeat: (id, item) in $root.groups --><div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.groups"><div service-item="" ng-click="sidebar.close();
    show(item);
    " data-ga-track="" ng-attr-data-ga-label="{
    {
       item.ID 
   }
}
" ng-attr-data-content="{
{
   item.tooltip() 
}
}
" ng-show="item.shown" class="service-item is--global-3 has--content has--tooltip" ng-class="{
&#39;
has--content&#39;
: item.isGroup() || item.contents, &#39;
has--spinner&#39;
: !item.isLoaded(), &#39;
has--external&#39;
: item.link &amp;
&amp;
item.isLoaded(), &#39;
has--tooltip&#39;
: item.tooltip() 
}
" data-ga-label="modul6desenvolupamentwebenento.2.daw_cfs.17.joan23" data-content="modul6desenvolupamentwebenento 2 daw_cfs 17 joan23"><!-- ngIf: item.link --> <!-- ngIf: !item.link --><a service-icon="" href="http://srv.net.fje.edu/net2/" target="_blank" class="nav__label ng-scope" ng-if="!item.link" ng-click="logger.logService(item, null, user)"><span class="service-item__name-wrap"><span class="service-item__icon"><span ng-show="$root.hasImage(item.icon()) &amp;
    &amp;
    item.image() === undefined" class="icon icon-group"></span> <!-- ngIf: item.image() --></span> <span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding ng-hide"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Mo</font></font></span><div class="service-item__name"><!-- ngIf: !favorite --><div ng-if="!favorite" class="ng-scope ng-binding"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Módulo 6: Desarrollo web en entorno cliente.</font></font></div><!-- end ngIf: !favorite --><!-- ngIf: favorite --></div></span> <!-- ngIf: item.tag --></a><!-- end ngIf: !item.link --> <span ng-class="{
    &#39;
    favorites__add&#39;
    : !favorite, &#39;
    favorites__remove&#39;
    : favorite
}
" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span> <!-- ngIf: !item.loaded --></div></div><!-- end ngRepeat: (id, item) in $root.groups --><div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.groups"><div service-item="" ng-click="sidebar.close();
    show(item);
    " data-ga-track="" ng-attr-data-ga-label="{
    {
       item.ID 
   }
}
" ng-attr-data-content="{
{
   item.tooltip() 
}
}
" ng-show="item.shown" class="service-item is--global-4 has--content has--tooltip" ng-class="{
&#39;
has--content&#39;
: item.isGroup() || item.contents, &#39;
has--spinner&#39;
: !item.isLoaded(), &#39;
has--external&#39;
: item.link &amp;
&amp;
item.isLoaded(), &#39;
has--tooltip&#39;
: item.tooltip() 
}
" data-ga-label="modul7desenvolupamentwebenento.2.daw_cfs.17.joan23" data-content="modul7desenvolupamentwebenento 2 daw_cfs 17 joan23"><!-- ngIf: item.link --> <!-- ngIf: !item.link --><a service-icon="" href="http://srv.net.fje.edu/net2/" target="_blank" class="nav__label ng-scope" ng-if="!item.link" ng-click="logger.logService(item, null, user)"><span class="service-item__name-wrap"><span class="service-item__icon"><span ng-show="$root.hasImage(item.icon()) &amp;
    &amp;
    item.image() === undefined" class="icon icon-group"></span> <!-- ngIf: item.image() --></span> <span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding ng-hide"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Mo</font></font></span><div class="service-item__name"><!-- ngIf: !favorite --><div ng-if="!favorite" class="ng-scope ng-binding"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Módulo 7: Desarrollo web en entorno servidor.</font></font></div><!-- end ngIf: !favorite --><!-- ngIf: favorite --></div></span> <!-- ngIf: item.tag --></a><!-- end ngIf: !item.link --> <span ng-class="{
    &#39;
    favorites__add&#39;
    : !favorite, &#39;
    favorites__remove&#39;
    : favorite
}
" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span> <!-- ngIf: !item.loaded --></div></div><!-- end ngRepeat: (id, item) in $root.groups --><div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.groups"><div service-item="" ng-click="sidebar.close();
    show(item);
    " data-ga-track="" ng-attr-data-ga-label="{
    {
       item.ID 
   }
}
" ng-attr-data-content="{
{
   item.tooltip() 
}
}
" ng-show="item.shown" class="service-item is--global-5 has--content has--tooltip" ng-class="{
&#39;
has--content&#39;
: item.isGroup() || item.contents, &#39;
has--spinner&#39;
: !item.isLoaded(), &#39;
has--external&#39;
: item.link &amp;
&amp;
item.isLoaded(), &#39;
has--tooltip&#39;
: item.tooltip() 
}
" data-ga-label="modul8desplegamentdaplicacions.2.daw_cfs.17.joan23" data-content="modul8desplegamentdaplicacions 2 daw_cfs 17 joan23"><!-- ngIf: item.link --> <!-- ngIf: !item.link --><a service-icon="" href="http://srv.net.fje.edu/net2/" target="_blank" class="nav__label ng-scope" ng-if="!item.link" ng-click="logger.logService(item, null, user)"><span class="service-item__name-wrap"><span class="service-item__icon"><span ng-show="$root.hasImage(item.icon()) &amp;
    &amp;
    item.image() === undefined" class="icon icon-group"></span> <!-- ngIf: item.image() --></span> <span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding ng-hide"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Mo</font></font></span><div class="service-item__name"><!-- ngIf: !favorite --><div ng-if="!favorite" class="ng-scope ng-binding"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Módulo 8: Desarrollo de aplicaciones web.</font></font></div><!-- end ngIf: !favorite --><!-- ngIf: favorite --></div></span> <!-- ngIf: item.tag --></a><!-- end ngIf: !item.link --> <span ng-class="{
    &#39;
    favorites__add&#39;
    : !favorite, &#39;
    favorites__remove&#39;
    : favorite
}
" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span> <!-- ngIf: !item.loaded --></div></div><!-- end ngRepeat: (id, item) in $root.groups --><div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.groups"><div service-item="" ng-click="sidebar.close();
    show(item);
    " data-ga-track="" ng-attr-data-ga-label="{
    {
       item.ID 
   }
}
" ng-attr-data-content="{
{
   item.tooltip() 
}
}
" ng-show="item.shown" class="service-item is--global-6 has--content has--tooltip" ng-class="{
&#39;
has--content&#39;
: item.isGroup() || item.contents, &#39;
has--spinner&#39;
: !item.isLoaded(), &#39;
has--external&#39;
: item.link &amp;
&amp;
item.isLoaded(), &#39;
has--tooltip&#39;
: item.tooltip() 
}
" data-ga-label="modul9dissenydinterficiesweb.2.daw_cfs.17.joan23" data-content="modul9dissenydinterficiesweb 2 daw_cfs 17 joan23"><!-- ngIf: item.link --> <!-- ngIf: !item.link --><a service-icon="" href="http://srv.net.fje.edu/net2/" target="_blank" class="nav__label ng-scope" ng-if="!item.link" ng-click="logger.logService(item, null, user)"><span class="service-item__name-wrap"><span class="service-item__icon"><span ng-show="$root.hasImage(item.icon()) &amp;
    &amp;
    item.image() === undefined" class="icon icon-group"></span> <!-- ngIf: item.image() --></span> <span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding ng-hide"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Mo</font></font></span><div class="service-item__name"><!-- ngIf: !favorite --><div ng-if="!favorite" class="ng-scope ng-binding"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Módulo 9: Diseño de interfaces web.</font></font></div><!-- end ngIf: !favorite --><!-- ngIf: favorite --></div></span> <!-- ngIf: item.tag --></a><!-- end ngIf: !item.link --> <span ng-class="{
    &#39;
    favorites__add&#39;
    : !favorite, &#39;
    favorites__remove&#39;
    : favorite
}
" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span> <!-- ngIf: !item.loaded --></div></div><!-- end ngRepeat: (id, item) in $root.groups --><div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.groups"><div service-item="" ng-click="sidebar.close();
    show(item);
    " data-ga-track="" ng-attr-data-ga-label="{
    {
       item.ID 
   }
}
" ng-attr-data-content="{
{
   item.tooltip() 
}
}
" ng-show="item.shown" class="service-item is--global-7 has--content has--tooltip" ng-class="{
&#39;
has--content&#39;
: item.isGroup() || item.contents, &#39;
has--spinner&#39;
: !item.isLoaded(), &#39;
has--external&#39;
: item.link &amp;
&amp;
item.isLoaded(), &#39;
has--tooltip&#39;
: item.tooltip() 
}
" data-ga-label="uf4basesdedadesobjectesrelaci.2.daw_cfs.17.joan23" data-content="uf4basesdedadesobjectesrelaci 2 daw_cfs 17 joan23"><!-- ngIf: item.link --> <!-- ngIf: !item.link --><a service-icon="" href="http://srv.net.fje.edu/net2/" target="_blank" class="nav__label ng-scope" ng-if="!item.link" ng-click="logger.logService(item, null, user)"><span class="service-item__name-wrap"><span class="service-item__icon"><span ng-show="$root.hasImage(item.icon()) &amp;
    &amp;
    item.image() === undefined" class="icon icon-group"></span> <!-- ngIf: item.image() --></span> <span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding ng-hide"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">17</font></font></span><div class="service-item__name"><!-- ngIf: !favorite --><div ng-if="!favorite" class="ng-scope ng-binding"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">1718 DAW2 UF4 Bases de datos II</font></font></div><!-- end ngIf: !favorite --><!-- ngIf: favorite --></div></span> <!-- ngIf: item.tag --></a><!-- end ngIf: !item.link --> <span ng-class="{
    &#39;
    favorites__add&#39;
    : !favorite, &#39;
    favorites__remove&#39;
    : favorite
}
" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span> <!-- ngIf: !item.loaded --></div></div><!-- end ngRepeat: (id, item) in $root.groups --><div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.groups"><div service-item="" ng-click="sidebar.close();
    show(item);
    " data-ga-track="" ng-attr-data-ga-label="{
    {
       item.ID 
   }
}
" ng-attr-data-content="{
{
   item.tooltip() 
}
}
" ng-show="item.shown" class="service-item is--global-8 has--content has--tooltip" ng-class="{
&#39;
has--content&#39;
: item.isGroup() || item.contents, &#39;
has--spinner&#39;
: !item.isLoaded(), &#39;
has--external&#39;
: item.link &amp;
&amp;
item.isLoaded(), &#39;
has--tooltip&#39;
: item.tooltip() 
}
" data-ga-label="uf4programacioorientadaaobject.2.daw_cfs.17.joan23" data-content="uf4programacioorientadaaobject 2 daw_cfs 17 joan23"><!-- ngIf: item.link --> <!-- ngIf: !item.link --><a service-icon="" href="http://srv.net.fje.edu/net2/" target="_blank" class="nav__label ng-scope" ng-if="!item.link" ng-click="logger.logService(item, null, user)"><span class="service-item__name-wrap"><span class="service-item__icon"><span ng-show="$root.hasImage(item.icon()) &amp;
    &amp;
    item.image() === undefined" class="icon icon-group"></span> <!-- ngIf: item.image() --></span> <span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding ng-hide"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">UF</font></font></span><div class="service-item__name"><!-- ngIf: !favorite --><div ng-if="!favorite" class="ng-scope ng-binding"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">UF4 Programación orientada a objetos. </font><font style="vertical-align: inherit;
    ">fundamentos</font></font></div><!-- end ngIf: !favorite --><!-- ngIf: favorite --></div></span> <!-- ngIf: item.tag --></a><!-- end ngIf: !item.link --> <span ng-class="{
    &#39;
    favorites__add&#39;
    : !favorite, &#39;
    favorites__remove&#39;
    : favorite
}
" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span> <!-- ngIf: !item.loaded --></div></div><!-- end ngRepeat: (id, item) in $root.groups --></div><div class="services-list clearfix" data-ga-category="Service" data-ga-action="Click" ng-show="thereAreElementsShown($root.services)"><!-- ngRepeat: (id, item) in $root.services --><div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.services"><div service-item="" ng-click="sidebar.close();
    show(item);
    " data-ga-track="" ng-attr-data-ga-label="{
    {
       item.id 
   }
}
" ng-show="item.shown" class="service-item service-item--small is--personal-1 has--external" ng-class="{
&#39;
has--content&#39;
: item.isGroup() || item.contents, &#39;
has--spinner&#39;
: !item.isLoaded(), &#39;
has--external&#39;
: item.link &amp;
&amp;
item.isLoaded() 
}
" data-ga-label="mail"><!-- ngIf: item.link -->
<a service-icon="" ng-href="/api2/redir.php?cap=N&amp;
link=http://mail.google.com/a/fje.edu" target="_blank" class="nav__label ng-scope" ng-if="item.link" ng-click="logger.logService(closeContents ? null : contents, item, user)" href="http://srv.net.fje.edu/api2/redir.php?cap=N&amp;
link=http://mail.google.com/a/fje.edu">
<span class="service-item__name-wrap">
    <span class="service-item__icon">
        <span ng-show="$root.hasImage(item.icon()) &amp;
        &amp;
        item.image() === undefined" class="icon icon-mail">

    </span> <!-- ngIf: item.image() -->
</span> 
<span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding ng-hide">
    <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Co</font></font>
    </span>
    <div class="service-item__name"><!-- ngIf: !favorite -->
        <div ng-if="!favorite" class="ng-scope ng-binding">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Correo</font></font>
            </div><!-- end ngIf: !favorite --><!-- ngIf: favorite -->
        </div>
    </span> <!-- ngIf: item.tag -->
</a><!-- end ngIf: item.link --> <!-- ngIf: !item.link --> 
<span ng-class="{
&#39;
favorites__add&#39;
: !favorite, &#39;
favorites__remove&#39;
: favorite
}
" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span> <!-- ngIf: !item.loaded --></div></div><!-- end ngRepeat: (id, item) in $root.services --><div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.services"><div service-item="" ng-click="sidebar.close();
    show(item);
    " data-ga-track="" ng-attr-data-ga-label="{
    {
       item.id 
   }
}
" ng-show="item.shown" class="service-item service-item--small is--personal-2 has--external" ng-class="{
&#39;
has--content&#39;
: item.isGroup() || item.contents, &#39;
has--spinner&#39;
: !item.isLoaded(), &#39;
has--external&#39;
: item.link &amp;
&amp;
item.isLoaded() 
}
" data-ga-label="calendari"><!-- ngIf: item.link --><a service-icon="" ng-href="/api2/redir.php?cap=N&amp;
link=http://calendar.google.com/a/fje.edu" target="_blank" class="nav__label ng-scope" ng-if="item.link" ng-click="logger.logService(closeContents ? null : contents, item, user)" href="http://srv.net.fje.edu/api2/redir.php?cap=N&amp;
link=http://calendar.google.com/a/fje.edu"><span class="service-item__name-wrap"><span class="service-item__icon"><span ng-show="$root.hasImage(item.icon()) &amp;
    &amp;
    item.image() === undefined" class="icon icon-calendari"></span> <!-- ngIf: item.image() --></span> <span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding ng-hide"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">como</font></font></span><div class="service-item__name"><!-- ngIf: !favorite --><div ng-if="!favorite" class="ng-scope ng-binding"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Calendario</font></font></div><!-- end ngIf: !favorite --><!-- ngIf: favorite --></div></span> <!-- ngIf: item.tag --></a><!-- end ngIf: item.link --> <!-- ngIf: !item.link --> <span ng-class="{
    &#39;
    favorites__add&#39;
    : !favorite, &#39;
    favorites__remove&#39;
    : favorite
}
" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span> <!-- ngIf: !item.loaded --></div></div><!-- end ngRepeat: (id, item) in $root.services --><div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.services"><div service-item="" ng-click="sidebar.close();
    show(item);
    " data-ga-track="" ng-attr-data-ga-label="{
    {
       item.id 
   }
}
" ng-show="item.shown" class="service-item service-item--small is--personal-3 has--external" ng-class="{
&#39;
has--content&#39;
: item.isGroup() || item.contents, &#39;
has--spinner&#39;
: !item.isLoaded(), &#39;
has--external&#39;
: item.link &amp;
&amp;
item.isLoaded() 
}
" data-ga-label="docs"><!-- ngIf: item.link --><a service-icon="" ng-href="/api2/redir.php?cap=N&amp;
link=http://drive.google.com/a/fje.edu" target="_blank" class="nav__label ng-scope" ng-if="item.link" ng-click="logger.logService(closeContents ? null : contents, item, user)" href="http://srv.net.fje.edu/api2/redir.php?cap=N&amp;
link=http://drive.google.com/a/fje.edu"><span class="service-item__name-wrap"><span class="service-item__icon"><span ng-show="$root.hasImage(item.icon()) &amp;
    &amp;
    item.image() === undefined" class="icon icon-docs"></span> <!-- ngIf: item.image() --></span> <span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding ng-hide"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Hacer</font></font></span><div class="service-item__name"><!-- ngIf: !favorite --><div ng-if="!favorite" class="ng-scope ng-binding"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Documentos</font></font></div><!-- end ngIf: !favorite --><!-- ngIf: favorite --></div></span> <!-- ngIf: item.tag --></a><!-- end ngIf: item.link --> <!-- ngIf: !item.link --> <span ng-class="{
    &#39;
    favorites__add&#39;
    : !favorite, &#39;
    favorites__remove&#39;
    : favorite
}
" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span> <!-- ngIf: !item.loaded --></div></div><!-- end ngRepeat: (id, item) in $root.services -->
<div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.services"><div service-item="" ng-click="sidebar.close();
   show(item);
   " data-ga-track="" ng-attr-data-ga-label="{
   {
       item.id 
   }
}
" ng-show="item.shown" class="service-item service-item--small is--personal-4 has--external" ng-class="{
&#39;
has--content&#39;
: item.isGroup() || item.contents, &#39;
has--spinner&#39;
: !item.isLoaded(), &#39;
has--external&#39;
: item.link &amp;
&amp;
item.isLoaded() 
}
" data-ga-label="BorsadeTreball"><!-- ngIf: item.link -->
<!-- CAJITA -->
<a service-icon="" ng-href="/api2/redir.php?cap=N&amp;
link=http://serveis.fje.edu/areaempresa/ofertes/" target="_blank" class="nav__label ng-scope" ng-if="item.link" ng-click="logger.logService(closeContents ? null : contents, item, user)" href="http://srv.net.fje.edu/api2/redir.php?cap=N&amp;
link=http://serveis.fje.edu/areaempresa/ofertes/">
<span class="service-item__name-wrap">
    <span class="service-item__icon">
        <span ng-show="$root.hasImage(item.icon()) &amp;
        &amp;
        item.image() === undefined" class="icon icon-borsadetreball ng-hide"></span> <!-- ngIf: item.image() -->
    </span> 
    <span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding">
       <font style="vertical-align: inherit;">
           <font style="vertical-align: inherit;">Bo</font>
       </font>
   </span>
   <div class="service-item__name"><!-- ngIf: !favorite -->
    <div ng-if="!favorite" class="ng-scope ng-binding">
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Bolsa de Trabajo</font>
        </font>
    </div><!-- end ngIf: !favorite --><!-- ngIf: favorite -->
</div>
</span> <!-- ngIf: item.tag -->
</a><!-- end ngIf: item.link --> <!-- ngIf: !item.link --> 
<span ng-class="{
&#39;
favorites__add&#39;
: !favorite, &#39;
favorites__remove&#39;
: favorite
}
" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add">
<img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg">
</span> <!-- ngIf: !item.loaded -->
</div>
</div><!-- end ngRepeat: (id, item) in $root.services -->
<!-- FIN CAJITA -->






<div class="service-item__wrap ng-scope" ng-repeat="(id, item) in $root.services">
    <div service-item="" ng-click="sidebar.close();
    show(item);
    " data-ga-track="" ng-attr-data-ga-label="{
    {
        item.id 
    }
}
" ng-show="item.shown" class="service-item service-item--small is--personal-5 has--external" ng-class="{
&#39;
has--content&#39;
: item.isGroup() || item.contents, &#39;
has--spinner&#39;
: !item.isLoaded(), &#39;
has--external&#39;
: item.link &amp;
&amp;
item.isLoaded() 
}
" data-ga-label="Incidències"><!-- ngIf: item.link -->



<a service-icon="" target="_blank" class="nav__label ng-scope" href="home.php"><span class="service-item__name-wrap"><span class="service-item__icon"><span ng-show="$root.hasImage(item.icon()) &amp;
    &amp;
    item.image() === undefined" class="icon icon-incidències ng-hide"></span> <!-- ngIf: item.image() --></span> <span ng-hide="$root.hasImage(item.icon()) || item.image() !== undefined" class="service-item__initials ng-binding"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Co</font></font></span><div class="service-item__name"><!-- ngIf: !favorite --><div ng-if="!favorite" class="ng-scope ng-binding"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Comedor</font></font></div><!-- end ngIf: !favorite --><!-- ngIf: favorite --></div></span> <!-- ngIf: item.tag --></a><!-- end ngIf: item.link --> <!-- ngIf: !item.link --> <span ng-class="{
    &#39;
    favorites__add&#39;
    : !favorite, &#39;
    favorites__remove&#39;
    : favorite
}
" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(item, $event)" class="ng-hide favorites__add"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span> <!-- ngIf: !item.loaded --></div></div><!-- end ngRepeat: (id, item) in $root.services --></div></div><div class="page-detail__wrap clearfix ng-scope"><first-level-tab><div class="service-item service-item--tab is---"><a ng-click="hideLVL2();
    $root.detail.hideLVL2();
    " ng-href="" target="_blank" class="nav__label"><span class="service-item__name-wrap"><span class="service-item__icon"><span ng-show="$root.hasImage(parent.icon())" class="icon icon- ng-hide"></span> <!-- ngIf: parent.image() --></span> <span ng-hide="$root.hasImage(parent.icon()) || parent.image() !== undefined" class="service-item__initials ng-binding"></span> <span class="service-item__name ng-binding"></span></span> <!-- ngIf: parent.tag --> <span class="service-item__compress-title"><span ng-show="$root.hasImage(parent.icon())" class="icon icon- ng-hide"></span> <span class="ng-binding"></span></span></a></div></first-level-tab><second-level-tab><div ng-show="$root.detail.hasDetailLVL2" class="ng-hide"><div class="service-item service-item--tab2 is---"><a ng-href="" target="_blank" class="nav__label"><span class="service-item__name-wrap"><span class="service-item__icon"><div ng-show="$root.hasImage(contents.icon())" class="icon icon- ng-hide"></div><!-- ngIf: contents.image() --></span> <span class="service-item__initials ng-binding" style="display:none"></span> <span class="service-item__name ng-binding"></span></span> <!-- ngIf: contents.tag --></a></div></div></second-level-tab><div ng-attr-data-ga-label="{
    {
       contents.ID 
   }
}
" class="page-detail is---" data-ga-label=""><div class="page-detail__header clearfix is---"><a data-ga-category="Group" data-ga-action="Close" data-ga-track="" ng-click="close()" href="http://srv.net.fje.edu/net2/" class="ir page-detail__close"><font style="vertical-align: inherit;
"><font style="vertical-align: inherit;
">Cerrar</font></font></a><h1 class="page-detail__title"><!-- ngIf: contents.link_to --> <!-- ngIf: !contents.link_to --><span ng-if="!contents.link_to" class="ng-scope ng-binding"></span><!-- end ngIf: !contents.link_to --></h1><span class="ir page-detail__favorite favorites__add ng-hide" ng-show="favorites_sidebar.active" ng-click="favorites_sidebar.toggleFavorite(contents, $event)"><img ng-src="images/icon-star-empty.svg" src="./LaNeta - Jesuitas Educación_files/icon-star-empty.svg"></span></div><div class="page-detail__body"><group-notifications><!-- ngIf: contents.isGroup() --><!-- ngIf: contents.notifications --></group-notifications></div></div></div></div><tutorial><div class="Tutorial ng-hide" ng-show="tutorial.opened"><div class="Tutorial-lightbox" ng-click="tutorial.close();
    sliderInstance.goTo(0);
    "></div><!-- ngIf: tutorial.isDesktop() --><div class="Tutorial-box ng-scope" ng-if="tutorial.isDesktop()" tutorial-desktop=""><div class="royalSlider Slides rsHor rsWithBullets"><div class="rsOverflow grab-cursor" style="width: 100px;
    height: 100px;
    "><div class="rsContainer" style="transition-duration: 0s;
    transform: translate3d(0px, 0px, 0px);
    "><div style="left: 0px;
    " class="rsSlide rsActiveSlide"><div class="rsContent Slides-1"><div class="wrapper"><h1 class="t-h1"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Bienvenido / aa</font></font></h1><img ng-src="images/logo_lanet_big.svg" class="logo" alt="LANET" src="./LaNeta - Jesuitas Educación_files/logo_lanet_big.svg"><p class="description"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">La plataforma educativa de Jesuitas Educación, </font></font><span class="u-lineBreak"></span><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">una herramienta pedagógica imprescindible.</font></font></p></div></div></div><div style="left: 100px;
    " class="rsSlide "><div class="rsContent"><img ng-src="images/tutorial/desktop/01_tutorial-interface.gif" src="./LaNeta - Jesuitas Educación_files/01_tutorial-interface.gif"><div class="Tutorial-box-content"><div class="title"><h3 class="t-h3"><font style="vertical-align: inherit;
    "><font style="vertical-align: inherit;
    ">Te presentamos el nuevo aspecto de LaNeta</font></font></h3></div><div class="content"><p>Ara disposes d'un espai que reuneix totes les eines que necessites pel desenvolupament de les teves activitats.</p><p>Els teus grups, tutories, serveis, els missatges i notícies a l'abast d'un clic.</p></div></div></div></div><div style="left: 200px;
    " class="rsSlide "><div class="rsContent"><img ng-src="images/tutorial/desktop/02_tutorial-messages.gif" src="./LaNeta - Jesuitas Educación_files/02_tutorial-messages.gif"><div class="Tutorial-box-content"><div class="title has-icon"><!-- ngInclude: 'images/icon-open-sidebar.svg' --><span ng-include="&#39;
        images/icon-open-sidebar.svg&#39;
        " class="ng-scope title-icon"><!--?xml version="1.0" encoding="utf-8"?--> <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve"> <g> <g> <path fill="#0063AE" d="M25,2c0.55,0,1,0.45,1,1v22c0,0.55-0.45,1-1,1H3c-0.55,0-1-0.45-1-1V3c0-0.55,0.45-1,1-1H25 M25,0H3 C1.346,0,0,1.346,0,3v22c0,1.654,1.346,3,3,3h22c1.654,0,3-1.346,3-3V3C28,1.346,26.654,0,25,0L25,0z"></path> </g> <g> <circle fill="#0063AE" cx="6" cy="8" r="2"></circle> </g> <g> <path fill="#0063AE" d="M23,9H10C9.447,9,9,8.553,9,8s0.447-1,1-1h13c0.553,0,1,0.447,1,1S23.553,9,23,9z"></path> </g> <g> <circle fill="#0063AE" cx="6" cy="14" r="2"></circle> </g> <g> <path fill="#0063AE" d="M18.667,15H10c-0.553,0-1-0.447-1-1s0.447-1,1-1h8.667c0.553,0,1,0.447,1,1S19.22,15,18.667,15z"></path> </g> <g> <circle fill="#0063AE" cx="6" cy="20" r="2"></circle> </g> <g> <path fill="#0063AE" d="M23,21H10c-0.553,0-1-0.447-1-1s0.447-1,1-1h13c0.553,0,1,0.447,1,1S23.553,21,23,21z"></path> </g> </g> </svg> </span><h3 class="t-h3">Centre de notificacions</h3></div><div class="content"><p>Aquí rebràs tots els missatges agrupats en tres categories:</p><ul><li>Notícies de la xarxa</li><li>Missatges personals</li><li>Avisos</li></ul></div></div></div></div><div style="left: 300px;
        " class="rsSlide "><div class="rsContent"><img ng-src="images/tutorial/desktop/03_tutorial-services.gif" src="./LaNeta - Jesuitas Educación_files/03_tutorial-services.gif"><div class="Tutorial-box-content"><div class="title has-icon"><!-- ngInclude: 'images/icon-external.svg' --><span ng-include="&#39;
            images/icon-external.svg&#39;
            " class="ng-scope title-icon"><!--?xml version="1.0" encoding="utf-8"?--> <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve"> <g id="grids" display="none"> <g display="inline"> <rect x="0" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="30" fill="#DADADA" width="2" height="2"></rect> </g> </g> <g id="Layer_1"> <g> <path fill="#FFFFFF" d="M22,29H5c-1.1,0-2-0.9-2-2V10c0-1.1,0.9-2,2-2h13c0.6,0,1,0.4,1,1s-0.4,1-1,1H5v17h17V14c0-0.6,0.4-1,1-1 s1,0.4,1,1v13C24,28.1,23.1,29,22,29z"></path> </g> <g> <path fill="#FFFFFF" d="M17.7,24.7H9.3c-1.1,0-2-0.9-2-2v-8.3c0-1.1,0.9-2,2-2h4.6c0.6,0,1,0.4,1,1s-0.4,1-1,1H9.3v8.3h8.3v-4.6 c0-0.6,0.4-1,1-1s1,0.4,1,1v4.6C19.7,23.8,18.8,24.7,17.7,24.7z"></path> </g> <g> <path fill="#FFFFFF" d="M14,19c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4L26.8,3.8c0.4-0.4,1-0.4,1.4,0s0.4,1,0,1.4L14.7,18.7 C14.5,18.9,14.3,19,14,19z"></path> </g> <g> <path fill="#FFFFFF" d="M28,13c-0.6,0-1-0.4-1-1V4c0-0.6,0.4-1,1-1s1,0.4,1,1v8C29,12.6,28.6,13,28,13z"></path> </g> <g> <path fill="#FFFFFF" d="M28,5h-8.1c-0.6,0-1-0.4-1-1s0.4-1,1-1H28c0.6,0,1,0.4,1,1S28.6,5,28,5z"></path> </g> </g> </svg> </span><h3 class="t-h3">Serveis</h3></div><div class="content"><p>Aquí podràs llançar els serveis personals com el Correu o Calendari.</p><p>Les icones de cada servei indiquen l'acció que realitzen.</p></div></div></div></div><div style="left: 400px;
            " class="rsSlide "><div class="rsContent"><img ng-src="images/tutorial/desktop/04_tutorial-groups.gif" src="./LaNeta - Jesuitas Educación_files/04_tutorial-groups.gif"><div class="Tutorial-box-content"><div class="title has-icon"><!-- ngInclude: 'images/icon-content.svg' --><span ng-include="&#39;
                images/icon-content.svg&#39;
                " class="ng-scope title-icon"><!--?xml version="1.0" encoding="utf-8"?--> <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve"> <g id="grids" display="none"> <g display="inline"> <rect x="0" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="0" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="0" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="0" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="0" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="30" fill="#DADADA" width="2" height="2"></rect> </g> </g> <g id="Layer_1"> <g> <path fill="#FFFFFF" d="M16,6c5.5,0,10,4.5,10,10s-4.5,10-10,10S6,21.5,6,16S10.5,6,16,6 M16,4C9.4,4,4,9.4,4,16s5.4,12,12,12 s12-5.4,12-12S22.6,4,16,4L16,4z"></path> </g> <g> <path fill="#FFFFFF" d="M16,23c-0.6,0-1-0.4-1-1V10c0-0.6,0.4-1,1-1s1,0.4,1,1v12C17,22.6,16.6,23,16,23z"></path> </g> <g> <path fill="#FFFFFF" d="M22,17H10c-0.6,0-1-0.4-1-1s0.4-1,1-1h12c0.6,0,1,0.4,1,1S22.6,17,22,17z"></path> </g> </g> </svg> </span><h3 class="t-h3">Grups i Tutories</h3></div><div class="content"><p>Els grups i tutories et permeten accedir a informació i serveis específics per aquestes agrupacions.</p><p>Des d'aquí podràs llançar els serveis associats o afegir grups, tutories o serveis als teus favorits.</p></div></div></div></div><div style="left: 500px;
                " class="rsSlide "><div class="rsContent"><img ng-src="images/tutorial/desktop/05_tutorial-favorites.gif" src="./LaNeta - Jesuitas Educación_files/05_tutorial-favorites.gif"><div class="Tutorial-box-content"><div class="title has-icon"><!-- ngInclude: 'images/icon-star-empty.svg' --><span ng-include="&#39;
                    images/icon-star-empty.svg&#39;
                    " class="ng-scope title-icon big"><!--?xml version="1.0" encoding="utf-8"?--> <!-- Generator: Adobe Illustrator 18.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve"> <g id="grids" display="none"> <g display="inline"> <rect fill="#DADADA" width="2" height="2"></rect> <rect x="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" fill="#DADADA" width="2" height="2"></rect> <rect x="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" fill="#DADADA" width="2" height="2"></rect> <rect x="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" fill="#DADADA" width="2" height="2"></rect> <rect x="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" fill="#DADADA" width="2" height="2"></rect> <rect x="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" fill="#DADADA" width="2" height="2"></rect> <rect x="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" fill="#DADADA" width="2" height="2"></rect> <rect x="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" fill="#DADADA" width="2" height="2"></rect> <rect x="30" fill="#FFFFFF" width="2" height="2"></rect> <rect y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="2" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="2" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="2" fill="#DADADA" width="2" height="2"></rect> <rect y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="4" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="4" fill="#FFFFFF" width="2" height="2"></rect> <rect y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="6" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="6" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="6" fill="#DADADA" width="2" height="2"></rect> <rect y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="8" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="8" fill="#FFFFFF" width="2" height="2"></rect> <rect y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="10" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="10" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="10" fill="#DADADA" width="2" height="2"></rect> <rect y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="12" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="12" fill="#FFFFFF" width="2" height="2"></rect> <rect y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="14" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="14" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="14" fill="#DADADA" width="2" height="2"></rect> <rect y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="16" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="16" fill="#FFFFFF" width="2" height="2"></rect> <rect y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="18" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="18" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="18" fill="#DADADA" width="2" height="2"></rect> <rect y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="20" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="20" fill="#FFFFFF" width="2" height="2"></rect> <rect y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="22" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="22" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="22" fill="#DADADA" width="2" height="2"></rect> <rect y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="24" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="24" fill="#FFFFFF" width="2" height="2"></rect> <rect y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="26" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="26" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="26" fill="#DADADA" width="2" height="2"></rect> <rect y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="2" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="4" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="6" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="8" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="10" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="12" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="14" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="16" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="18" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="20" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="22" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="24" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="26" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect x="28" y="28" fill="#DADADA" width="2" height="2"></rect> <rect x="30" y="28" fill="#FFFFFF" width="2" height="2"></rect> <rect y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="2" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="4" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="6" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="8" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="10" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="12" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="14" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="16" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="18" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="20" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="22" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="24" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="26" y="30" fill="#DADADA" width="2" height="2"></rect> <rect x="28" y="30" fill="#FFFFFF" width="2" height="2"></rect> <rect x="30" y="30" fill="#DADADA" width="2" height="2"></rect> </g> </g> <polygon fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="16,6.2 18.4,13.7 26.3,13.7 19.9,18.3 22.4,25.8 16,21.2 9.6,25.8 12.1,18.3 5.7,13.7 13.6,13.7 "></polygon> </svg> </span><h3 class="t-h3">Favorits</h3></div><div class="content"><p>Pots afegir a la barra de favorits els teus serveis, grups o tutories més utilitzats per tal d'accedir a ells de forma més ràpida i còmoda.</p><p>Per començar a afegir-hi, clica el botó Afegir i selecciona la icona. Per treure o posar més, clica a Editar.</p></div></div></div></div><div style="left: 600px;
                    " class="rsSlide "><div class="rsContent"><img ng-src="images/tutorial/desktop/06_tutorial-session.gif" src="./LaNeta - Jesuitas Educación_files/06_tutorial-session.gif"><div class="Tutorial-box-content"><div class="title has-icon"><!-- ngInclude: 'images/icon-logout.svg' --><span ng-include="&#39;
                        images/icon-logout.svg&#39;
                        " class="ng-scope title-icon"><!--?xml version="1.0" encoding="utf-8"?--> <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve"> <g> <path fill="#0062AE" d="M16,23.3c-4.3,0-7.9-3.5-7.9-7.9c0-2.7,1.3-5.1,3.5-6.6c0.5-0.3,1.1-0.2,1.4,0.3s0.2,1.1-0.3,1.4 c-1.7,1.1-2.6,2.9-2.6,4.9c0,3.2,2.6,5.9,5.9,5.9c3.2,0,5.9-2.6,5.9-5.9c0-2-1-3.8-2.7-4.9c-0.5-0.3-0.601-0.9-0.3-1.4 C19.2,8.6,19.8,8.5,20.3,8.8c2.2,1.5,3.601,3.9,3.601,6.6C23.9,19.8,20.3,23.3,16,23.3z"></path> </g> <g> <path fill="#0062AE" d="M16,2c3.6,0,7.2,1.4,9.9,4.1c5.5,5.5,5.5,14.3,0,19.8C23.2,28.6,19.6,30,16,30c-3.6,0-7.2-1.4-9.9-4.1 c-5.5-5.5-5.5-14.3,0-19.8C8.8,3.4,12.4,2,16,2 M16,0C11.7,0,7.7,1.7,4.7,4.7c-6.2,6.2-6.2,16.399,0,22.6c3,3,7,4.7,11.3,4.7 s8.3-1.7,11.3-4.7c6.2-6.2,6.2-16.4,0-22.6C24.3,1.7,20.3,0,16,0L16,0z"></path> </g> <g> <path fill="#0062AE" d="M16,16.1c-0.6,0-1-0.4-1-1V7.6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v7.5C17,15.7,16.6,16.1,16,16.1z"></path> </g> </svg> </span><h3 class="t-h3">Sessió</h3></div><div class="content"><p>Al finalitzar les teves activitats a laNet tanca la sessió per seguretat.</p></div></div></div></div><div style="left: 700px;
                        " class="rsSlide "><div class="rsContent Slides-99"><div class="wrapper"><h1 class="t-h1">Hem acabat.<br>Esperem que tinguis una gran experiència amb la plataforma.</h1><h2 class="t-h2">Comença a gaudir de</h2><img ng-src="images/logo_lanet_big.svg" class="logo" alt="LANET" src="./LaNeta - Jesuitas Educación_files/logo_lanet_big.svg"></div></div></div></div></div></div><div class="Navigation"><a class="Button Button--main Navigation-buttonFirstSlide" ng-show="sliderInstance.currSlideId === 0" ng-click="sliderInstance.next()"><span>Començar el recorregut</span></a> <a class="Button Button--main Navigation-buttonLastSlide ng-hide" ng-show="sliderInstance.currSlideId === sliderInstance.numSlides - 1" ng-click="tutorial.close();
                            sliderInstance.goTo(0);
                            "><span>Ho he entès</span></a><div class="Navigation-item pages-wrapper ng-hide" ng-show="sliderInstance.currSlideId &gt;
                            0 &amp;
                            &amp;
                            sliderInstance.currSlideId &lt;
                            sliderInstance.numSlides - 1"><div class="Navigation-pages ng-binding">0/7</div></div><div class="Navigation-item bullets-wrapper ng-hide" ng-show="sliderInstance.currSlideId &gt;
                            0 &amp;
                            &amp;
                            sliderInstance.currSlideId &lt;
                            sliderInstance.numSlides - 1"><div class="Navigation-bullets"><div class="rsArrow rsArrowLeft rsArrowDisabled rsHidden" style="display: block;
                            "><div class="rsArrowIcn"></div></div><div class="rsNav rsBullets"><div class="rsNavItem rsBullet rsNavSelected"><span></span></div><div class="rsNavItem rsBullet"><span></span></div><div class="rsNavItem rsBullet"><span></span></div><div class="rsNavItem rsBullet"><span></span></div><div class="rsNavItem rsBullet"><span></span></div><div class="rsNavItem rsBullet"><span></span></div><div class="rsNavItem rsBullet"><span></span></div><div class="rsNavItem rsBullet"><span></span></div></div><div class="rsArrow rsArrowRight rsHidden" style="display: block;
                            "><div class="rsArrowIcn"></div></div></div></div><div class="Navigation-item action-wrapper"><a class="Button Button--secondary Navigation-jump" ng-hide="sliderInstance.currSlideId === sliderInstance.numSlides - 1" ng-click="tutorial.close(true);
                                sliderInstance.goTo(0);
                                "><span>Saltar el tutorial</span></a> <a class="Button Button--secondary Navigation-restart ng-hide" ng-click="sliderInstance.goTo(1)" ng-show="sliderInstance.currSlideId === sliderInstance.numSlides - 1"><span>Tornar a l'inici</span></a></div></div></div><!-- end ngIf: tutorial.isDesktop() --><!-- ngIf: !tutorial.isDesktop() --></div></tutorial></div><alert><div class="Alert"><div class="Alert-lightbox" ng-click="alert.close()"></div><div class="Alert-box"><div class="Alert-box-title ng-binding">Ooops!</div><div class="Alert-box-content ng-binding" ng-bind-html="alert.message">Has arribat al <strong>màxim de favorits</strong> a afegir.<br><br> Elimina els elements que ja no són tan importants i tindràs <strong>espai disponible per afegir-ne de nous</strong>.</div><a class="Alert-box-button ng-binding" ng-click="alert.close()">D'acord</a></div></div></alert><div ng-show="$root.servicesFailed &amp;
                                &amp;
                                $root.familyFailed &amp;
                                &amp;
                                $root.groupsFailed &amp;
                                &amp;
                                $root.modalFailed" class="ng-hide"></div><script type="text/javascript">function tellAngular() {
                                   var interval = setInterval(function() {
                                       var domElt = document.getElementsByClassName('page-sidebar')[0], header = document.getElementsByClassName('page-sidebar__header')[0], banner = document.getElementsByClassName('sidebar__banner')[0], titles = document.getElementsByClassName('sidebar__message-title'), scope = angular.element(domElt).scope(), height = domElt.clientHeight;
                                       if(header) {
                                           height = height - header.clientHeight;
                                       }
                                       if(banner) {
                                           height = height - banner.clientHeight;
                                       }
                                       for(var title = 0;
                                           title < titles.length;
                                           ++title) {
                                           height = height - titles[title].clientHeight;
                                   }
                                   if(height <= window.innerHeight && titles.length != 0) {
                                       scope.$apply(function() {
                                           scope.height = height;
                                       }
                                       );
                                       clearInterval(interval);
                                   }
                                   else scope = angular.element(domElt).scope();
                               }
                               , 1000);
                               }
 //first call of tellAngular when the dom is loaded document.addEventListener("DOMContentLoaded", tellAngular, false);
 //calling tellAngular on resize event window.onresize = tellAngular;
 </script><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KNHV6R" height="0" width="0" style="display:none;
 visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){
    w[l]=w[l]||[];
    w[l].push({
        'gtm.start': new Date().getTime(),event:'gtm.js'
    }
    );
    var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
    j.async=true;
    j.src= '//www.googletagmanager.com/gtm.js?id='+i+dl;
    f.parentNode.insertBefore(j,f);
}
)(window,document,'script','dataLayer','GTM-KNHV6R');
</script><!-- End Google Tag Manager --><!-- <script src="./LaNeta - Jesuitas Educación_files/jquery-1.11.3.min.js.descarga"></script><script src="./LaNeta - Jesuitas Educación_files/9f0673b5.vendor.js.descarga"></script><script src="./LaNeta - Jesuitas Educación_files/3ac19128.config.js.descarga"></script><script src="./LaNeta - Jesuitas Educación_files/f9169e16.scripts.js.descarga"></script> --> <!-- JE específic --> <script type="text/javascript" async="" src="./LaNeta - Jesuitas Educación_files/netje.js.descarga"></script> <!--^ JE específic --><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;
"><div><div class="logo"><img src="./LaNeta - Jesuitas Educación_files/translate_24dp.png" width="20" height="20" alt="Google Traductor de Google"></div></div></div><div class="top" style="padding: 8px;
float: left;
width: 100%;
"><h1 class="title gray">Texto original</h1></div><div class="middle" style="padding: 8px;
"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;
"><!-- <div class="activity-links"><span class="activity-link">Sugiere una traducción mejor</span><span class="activity-link"></span></div> --><div class="started-activity-container"><hr style="color: #CCC;
background-color: #CCC;
height: 1px;
border: none;
"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;
"></div></div> <div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>
<?php
}
?>