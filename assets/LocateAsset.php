<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\assets;

use yii\web\AssetBundle;
/**
 * Description of LocateAsset
 *
 * @author asotilp
 */
class LocateAsset  extends AssetBundle {
    //put your code here
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
      'js/locate.js',
      'js/geoPosition.js',
      'http://maps.google.com/maps/api/js?sensor=false',
    ];
}
