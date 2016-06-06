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
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
//    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $css = [
        'css/animate.css',
        'apartment-font/css/font-awesome.min.css',
        'css/plugins.css',
        'css/apartment-layout.css',
        'css/apartment-colors-blue.css',
        'css/site.css',
    ];
    public $js = [
        'js/jQuery/jquery.min.js',
        'js/jQuery/jquery-ui.min.js',
        'js/apartment.js',
//        'mail/validate.js',
        'bootstrap/bootstrap.min.js',
        'js/plugins.js',
        'js/wow.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
//        'macgyer\yii2materializecss\assets\MaterializeAsset',
    ];

    public function getAccess($controller) {
        $allow = false;
        $accesses = Access::findAll(["profile_id" => Yii::$app->user->identity->profile_id]);
        foreach ($accesses as $accesses) {
            $module = Module::findOne(["id" => $accesses->module_id]);
            if ($module->controller === $controller) {
                $allow = true;
                break;
            }
        }
        return $allow;
    }

}
