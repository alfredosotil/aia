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
use yii\db\Connection;

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
//        'bootstrap/bootstrap.min.css',
        'apartment-font/css/font-awesome.min.css',
        'css/plugins.css',
        'css/apartment-layout.css',
        'css/apartment-colors-blue.css',
//        'css/pace-theme.css',
//        'css/site.css',
    ];
    public $js = [
//        'js/jQuery/jquery.min.js',
//        'js/jQuery/jquery-ui.min.js',
//        'bootstrap/bootstrap.min.js',
        'js/apartment.js',
        'js/plugins.js',
//        'mail/validate.js',
        'js/wow.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapAsset',
//        'macgyer\yii2materializecss\assets\MaterializeAsset',
    ];

    public static function getAccess($controller) {
        $allow = false;
        if (Yii::$app->getUser()->isGuest &&
                Yii::$app->getRequest()->url !== Url::to(Yii::$app->getUser()->loginUrl)) {
            Yii::$app->getResponse()->redirect(Yii::$app->getUser()->loginUrl);
        } else {
            $info = AppAsset::executeQuery(Yii::$app->db, "select m.id 
            from access a, profile p, module m 
            where 
            a.profile_id=p.id 
            and a.module_id=m.id 
            and p.id=:PROFILE_ID 
            and m.controller=:CONTROLLER", [':PROFILE_ID' => Yii::$app->user->identity->profile_id, ':CONTROLLER' => $controller]);
            if (count($info) > 0) {
                $allow = true;
            }
        }
        return $allow;
    }

    public static function menuDashboard() {
        $menu = "<li><a href=" . Url::toRoute("dashboard/index") . "><i class='fa fa-dashboard fa-fw'></i> Dashboard</a></li>";
        if (!Yii::$app->user->isGuest) {
            $typemodules = AppAsset::executeQuery(Yii::$app->db, "select distinct m.type_id, t.type
            from profile p, user u, module m, access a, type t
            where u.id=:USER_ID
            and t.category='module'
            and p.id=u.profile_id
            and p.id=a.profile_id
            and m.id=a.module_id
            and t.id=m.type_id
            order by 1", [':USER_ID' => intval(Yii::$app->user->identity->id)]);
            foreach ($typemodules as $value) {
                $tmn = $value['type'];
                $menu.="<li>
                        <a href='#'><i class='fa fa-bar-chart-o fa-fw'></i>$tmn<span class='fa arrow'></span></a>
                            <ul class='nav nav-second-level'>";
                $modules = AppAsset::executeQuery(Yii::$app->db, "select p.name, 
                m.label,
                m.iconfa,
                m.controller,
                m.description,
                m.active
                from access a, module m, profile p, type t, user u
                where u.id=:USER_ID
                and t.id=:TYPE
                and t.category='module'
                and p.id=u.profile_id
                and p.id=a.profile_id
                and m.id=a.module_id
                and t.id=m.type_id
                order by 2", [':USER_ID' => intval(Yii::$app->user->identity->id), ':TYPE' => intval($value['type_id'])]);
                foreach ($modules as $module) {
                    if ($module['active'] !== "0") {
                        $controller = $module['controller'];
                        $url = Url::toRoute("$controller/index");
                        $label = $module['label'];
                        $icon = $module['iconfa'];
                        $menu.= "<li>                               
                                    <a href='$url'> <i class='fa $icon'></i>  $label</a>
                                 </li>";
                    }
                }
                $menu .= "</ul></li>";
            }
        }
        return $menu;
    }

    public static function executeQuery($db, $query, $params) {
        return $db->createCommand($query, $params)->queryAll();
    }

    public static function updateQuery($db, $query, $params) {
        return $db->createCommand($query, $params)->execute();
    }

    public static function getIconPingProperty($type) {
        if ($type === 'Casa' || $type === 'Casa de Campo' || $type === 'Casa de Playa') {
            return "/images/pin-house.png";
        } elseif ($type === 'Departamento') {
            return "/images/pin-apartment.png";
        } elseif ($type === 'Terreno') {
            return "/images/pin-land.png";
        } elseif ($type === 'Local' || $type === 'Oficina') {
            return "/images/pin-commercial.png";
        }
        return "/images/pin-commercial.png";
    }

    public static function custom_echo($x, $length) {
        if (strlen($x) <= $length) {
            echo $x;
        } else {
            $y = substr($x, 0, $length) . '...';
            echo $y;
        }
    }
}
