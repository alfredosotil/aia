<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use Yii;
use yii\helpers\Url;
use yii\web\AssetBundle;
use app\models\Profile;
use app\models\Access;
use app\models\Module;
use yii\web\View;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DashboardAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
//    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $css = [
        'css/animate.css',
        'apartment-font/css/font-awesome.min.css',
//        'bootstrap/bootstrap.min.css',
//        'css/plugins.css',
//        'css/apartment-layout.css',
//        'css/apartment-colors-blue.css',
//        'css/site.css',
        'css/metisMenu.min.css',
        'css/morris.css',
        'css/sb-admin-2.css',
        'css/timeline.css',
    ];
    public $js = [
        'js/apartment.js',
        'js/sb-admin-2.js',
        'js/metisMenu.min.js',
        'js/raphael-min.js',
        'js/wow.min.js',
//        'bootstrap/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapAsset',
//        'macgyer\yii2materializecss\assets\MaterializeAsset',
    ];

}
