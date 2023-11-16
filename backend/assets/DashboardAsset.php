<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle

{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/all.min.css',
        'css/summernote-bs4.min`1.css',
        'css/daterangepicker.css',
        'css/OverlayScrollbars.min.css',
        'css/adminlte.min.css',
        'css/icheck-bootstrap.min.css',
        'css/tempusdominus-bootstrap-4.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'css/all.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
        'css/site.css',
        'css/jqvmap.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/jquery-ui.min.js',
        'js/bootstrap.bundle.min.js',
        'js/Chart.bundle.min.js',
        'js/sparkline.js',
        'js/jquery.vmap.min.js',
        'js/jquery.knob.min.js',
        'js/locales.min.js',
        'js/daterangepicker.js',
        'js/tempusdominus-bootstrap-4.min.js',
        'js/summernote-bs4.min.js',
        'js/jquery.overlayScrollbars.min.js',
        'js/adminlte.js',
        'js/demo.js',
        'js/dashboard.js',
        'js/site.js',
        'js/jquery.mousewheel.js',
        'js/raphael.min.js',
        'js/jquery.mapael.min.js',
        'js/dashboard2.js',
        "https://kit.fontawesome.com/f369fa4ab3.js",
    ];
    public $dist= [
        //'img/AdminLTELogo.png',
        'img/',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}