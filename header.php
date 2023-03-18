<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>IDISUMUT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
   <?php wp_head(); ?>
  </head>
<body class="pace-dark">
<!-- BEGIN HEADER -->
<nav class="header bg-header transparent-dark " data-pages="header" data-pages-header="autoresize" data-pages-resize-class="dark">
      <div class="container relative">
        <!-- BEGIN LEFT CONTENT -->
        <div class="pull-left">
          <!-- .header-inner Allows to vertically Align elements to the Center-->
          <div class="header-inner">
            <!-- BEGIN LOGO -->
            <img width="35" height="35"
            src="<?php echo get_theme_file_uri('assets/images/logo-idi.png') ?>"
            class="attachment-medium size-medium wp-post-image img-rounded" alt="" decoding="async"
            loading="lazy" sizes="(max-width: 50px) 50vw, 50px"> </img> 
          </div>
        </div>
        <!-- BEGIN HEADER TOGGLE FOR MOBILE & TABLET -->
        <div class="pull-right">
          <div class="header-inner">
            <a href="#" class="search-toggle visible-sm-inline visible-xs-inline p-r-10" data-toggle="search"><i class="fs-14 pg-search"></i></a>
            <div class="visible-sm-inline visible-xs-inline menu-toggler pull-right p-l-10" data-pages="header-toggle" data-pages-element="#header">
              <div class="one"></div>
              <div class="two"></div>
              <div class="three"></div>
            </div>
          </div>
        </div>
        <!-- END HEADER TOGGLE FOR MOBILE & TABLET -->
        <!-- BEGIN RIGHT CONTENT -->
        <div class="menu-content mobile-dark pull-right clearfix" data-pages-direction="slideRight" id="header">
          <!-- BEGIN HEADER CLOSE TOGGLE FOR MOBILE -->
          <div class="pull-right">
            <a href="#" class="padding-10 visible-xs-inline visible-sm-inline pull-right m-t-10 m-b-10 m-r-10" data-pages="header-toggle" data-pages-element="#header">
              <i class=" pg-close_line"></i>
            </a>
          </div>
          <!-- END HEADER CLOSE TOGGLE FOR MOBILE -->
          <!-- BEGIN MENU ITEMS -->
          <div class="header-inner">
            <ul class="menu">
              <li>
                <a href="<?php echo site_url('/') ?>" class="active">Beranda</a>
              </li>
              <li class="classic">
                <a href="javascript:;">
                    Organisasi  <i class="pg-arrow_minimize m-l-5"></i>
                  </a>
                <nav class="classic ">
                  <span class="arrow"></span>
                  <ul>                   
                    <li>
                      <a href="<?php echo site_url('/wilayah') ?>">Cabang</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('/perhimpunan') ?>">Perhimpunan</a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('/keanggotaan') ?>">Keanggotaan</a>
                    </li>
                  </ul>
                </nav>
              </li>
              <li>
                <a href="<?php echo site_url('/berita') ?>">Berita</a>
              </li>
              <li>
                <a href="<?php echo site_url('/galeri') ?>">Galeri</a>
              </li>
              <li>
                <a href="<?php echo site_url('/event') ?>">Event</a>
              </li>                       
              <li>
                <a href="<?php echo site_url('/kontak') ?>">Kontak</a>
              </li>
            </ul>
            <a href="#" class="search-toggle hidden-xs hidden-sm" data-toggle="search"><i class="fs-14 pg-search"></i></a>
            <!-- BEGIN COPYRIGHT FOR MOBILE -->
            <div class="font-monserrat m-l-35 m-r-35 m-b-20 visible-sm visible-xs m-t-20">
             
              <p class="fs-11 small-text muted">Copyright &copy; 2023 Ikatan Dokter Indonesia Wilayah Sumatera Utara.</p>
            </div>
            <!-- END COPYRIGHT FOR MOBILE -->
          </div>
          <!-- END MENU ITEMS -->
        </div>
      </div>
    </nav>
    <!-- END HEADER -->