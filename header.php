<?php

use app\classes\Asset;

?>
    <!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>فروشگاه من</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ProteusThemes">

        <!--  Google Fonts  -->
        <link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek'
              rel='stylesheet' type='text/css'>

        <!-- Twitter Bootstrap -->
        <link href="<?php Asset::css('bootstrap', 'stylesheets'); ?>" rel="stylesheet">
        <link href="<?php Asset::css('responsive', 'stylesheets'); ?>" rel="stylesheet">
        <!-- Slider Revolution -->
        <link
                rel="stylesheet"
                href="<?php Asset::css('rs-plugin/css/settings', 'js'); ?>"
                type="text/css"/>
        <link
                rel="stylesheet"
                href="<?php Asset::css('jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min', 'js'); ?>"
                type="text/css"/>
        <!-- jQuery UI -->
        <!-- PrettyPhoto -->
        <link
                rel="stylesheet"
                href="<?php Asset::css('jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min', 'js'); ?>"
                type="text/css"/>

        <link rel="stylesheet"
              href="<?php Asset::css('css/smoothness/jquery-ui-1.10.3.custom.minjs/prettyphoto/css/prettyPhoto.css', 'jquery-ui-1.10.3'); ?>"
              type="text/css"/>

        <link href="<?php Asset::css('main', 'stylesheets'); ?>" rel="stylesheet">


        <script src="<?php Asset::js('modernizr.custom.56918'); ?>"></script>

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php image('apple-touch/144.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php image('apple-touch/114.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php image('apple-touch/72.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php image('apple-touch/57.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php image('apple-touch/57.png'); ?>">


        <?php wp_head(); ?>
    </head>

<body class="boxed pattern-10">

<div class="master-wrapper">

    <!--  ==========  -->
    <!--  = Header =  -->
    <!--  ==========  -->
    <?php view('partials.header'); ?>
    <!--  ==========  -->

<?php view('partials.main-menu'); ?>