<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        "vendors/mdi/css/materialdesignicons.min.css",
        "vendors/feather/feather.css",
        "vendors/base/vendor.bundle.base.css",
        "vendors/flag-icon-css/css/flag-icon.min.css",
        "vendors/font-awesome/css/font-awesome.min.css",
        "vendors/jquery-bar-rating/fontawesome-stars-o.css",
        "vendors/jquery-bar-rating/fontawesome-stars.css",
        "vendor/bootstrap/css/bootstrap.min.css",
        "fonts/font-awesome-4.7.0/css/font-awesome.min.css",
        "fonts/Linearicons-Free-v1.0.0/icon-font.min.css",
        "vendor/animate/animate.css",
        "vendor/css-hamburgers/hamburgers.min.css",
        "vendor/animsition/css/animsition.min.css",
        "vendor/select2/select2.min.css",
        "vendor/daterangepicker/daterangepicker.css",
        "css/util.css",
       "css/main.css",
        "css/style.css"
    ];
    public $js = [
        "vendors/base/vendor.bundle.base.js",
        "js/off-canvas.js",
        "js/hoverable-collapse.js",
        "js/template.js",
        "vendors/chart.js/Chart.min.js",
        "vendors/jquery-bar-rating/jquery.barrating.min.js",
        "js/dashboard.js",
        "vendor/jquery/jquery-3.2.1.min.js",
        "vendor/animsition/js/animsition.min.js",
        "vendor/bootstrap/js/popper.js",
        "vendor/bootstrap/js/bootstrap.min.js",
        "vendor/select2/select2.min.js",
        "vendor/daterangepicker/moment.min.js",
        "vendor/daterangepicker/daterangepicker.js",
        "vendor/countdowntime/countdowntime.js",
        "js/main.js",
         'tinymce/tinymce.min.js',
         'public/js/main.js',
        'tinymce/tinymce.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}


