<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107004784-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-107004784-1');
    </script>
 -->    
    <link rel="apple-touch-icon" sizes="57x57" href="icons/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icons/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icons/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icons/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icons/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icons/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icons/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icons/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icons/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="icons/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icons/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icons/icon/favicon-16x16.png">
    <link rel="manifest" href="icons/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="icons/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>La Araucana</title>
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="icons/foundation-icons.css">
    
</head>
<body>

    <div data-sticky-container class="headermenu show-for-small-only">
      <div class="top-bar headermenu" data-sticky data-options="marginTop: 0" >
        <div class="row" style="padding: 0px; width: 100%" id="rowMobile">
          <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium" style="background:transparent; width: 100%">
            <div class="row " style="width: 100% ">
                <div class="columns small-8 ">
                    <ul class="menu">
                       <a href="./">
                         <img src="assets/logo.svg" width="200px" height="auto">
                       </a>
                    </ul>
                </div>
                <div class="columns small-4 text-right ">
                    <button id="clickBtnMenu" class="menu-icon" type="button" data-toggle="example-menu" style="margin-top: 20px"></button>
                </div>
            </div>
           
          </div>

          <div class="top-bar show-for-small-only" id="example-menu" style="height: 100vh;  z-index: 1; /* Sit on top */">
            <div class="top-bar-left" style="height: 100%;">
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="universidades.php" >UNIVERSIDADES</a></li>
              </ul>
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="ip.php">Inst. Profesionales y CFT</a></li>
              </ul>
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="diplomados.php" >CURSOS, DIPLOMADOS Y MAGISTER</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> 
    </div>


     <div data-sticky-container class="show-for-medium" style="min-height:  120px;">
      <div class="top-bar headermenu" data-sticky data-options="marginTop: 0" id="example-menu">
        <div class="row">
          <div class="columns small-5  large-3 show-for-medium" style="width: 250px;">
            <ul class="menu">
               <a href="./">
                  <img src="assets/logo.svg" width="200px" height="auto">
               </a>
            </ul>
          </div>
          <div class="columns small-12 medium-9 show-for-medium" >
            <ul class="menu" data-magellan id="menuListHeader" style="    padding-left: 80px;">
                <li><a href="universidades.php" >UNIVERSIDADES</a></li>
                <li><a href="ip.php">Inst. Profesionales y CFT</a></li>
                <li><a href="diplomados.php">CURSOS, DIPLOMADOS Y MAGISTER</a></li> 
            </ul>
          </div>
        </div>
      </div>
    </div>
