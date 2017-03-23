<?php
namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class MainAsset extends  AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'source/css/structure.css',
        'source/css/style.css',
        'source/css/responsive.css',
        'source/css/animate.css',
    ];

    public $js = [
        'source/js/lib/owl-carousel/owl.carousel.css',
        'source/js/lib/owl-carousel/owl.carousel.min.js',
        'source/js/main.js',
        'source/js/lib/isotope/isotope.js',
        'source/js/lib/isotope/packery.js',

    ];

    public $depends = [
       'yii\web\YiiAsset', // yii.js, jquery.js
       'yii\bootstrap\BootstrapAsset', // bootstrap.css
       'yii\bootstrap\BootstrapPluginAsset' // bootstrap.js
    ];

    public $jsOptions = [
      'position' =>  View::POS_BEGIN,
    ];


}