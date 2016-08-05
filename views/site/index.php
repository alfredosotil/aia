<?php

use yii\helpers\ArrayHelper;
use app\models\Distrito;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
\yii\bootstrap\BootstrapPluginAsset::register($this);
$price = (new \yii\db\Query())->from('property')->max('price');
$area = (new \yii\db\Query())->from('property')->max('area');
$bedrooms = (new \yii\db\Query())->from('property')->max('bedrooms');
$bathrooms = (new \yii\db\Query())->from('property')->max('bathrooms');
?>
<div class="site-index">
    <section class="no-padding adv-search-section">
        <!-- Slider main container -->
        <div id="swiper1" class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?= $this->context->getMainSlider(); ?>
            </div>
        </div>   
        <?php
        $form = ActiveForm::begin([
                    'id' => 'formfindproperty',
//                                'type' => ActiveForm::TYPE_HORIZONTAL,
                    'action' => Url::toRoute("site/findproperty"),
                    'method' => 'post',
                    'options' => ['class' => 'adv-search-form']
        ]);
        ?>
        <div class="adv-search-cont">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-11 adv-search-icons">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs adv-search-tabs" role="tablist">
                            <li role="presentation" class="active" data-toggle="tooltip" data-placement="top" title="Buscar propiedades"><a href="#apartments" aria-controls="apartments" role="tab" data-toggle="tab" id="adv-search-tab1"><i class="fa fa-search"></i></a></li>
<!--                                        <li role="presentation" data-toggle="tooltip" data-placement="top" title="casas"><a href="#houses" aria-controls="houses" role="tab" data-toggle="tab" id="adv-search-tab2"><i class="fa fa-home"></i></a></li>
                            <li role="presentation" data-toggle="tooltip" data-placement="top" title="comerciales"><a href="#commercials" aria-controls="commercials" role="tab" data-toggle="tab" id="adv-search-tab3"><i class="fa fa-industry"></i></a></li>
                            <li role="presentation" data-toggle="tooltip" data-placement="top" title="terrenos"><a href="#lands" aria-controls="lands" role="tab" data-toggle="tab" id="adv-search-tab4"><i class="fa fa-tree"></i></a></li>-->
                        </ul>
                    </div>
                    <div class="col-lg-1 visible-lg">
                        <a id="adv-search-hide" href="#"><i class="jfont">&#xe801;</i></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row tab-content">
                    <div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade in active" id="apartments">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <select name="transaction[]" class="bootstrap-select" title="Transaccion:" multiple>
                                    <option value="3">Venta</option>
                                    <option value="2">Alquiler</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <?= Html::dropDownList('district[]', null, ArrayHelper::map(Distrito::find()->where(["idProv" => 127])->orderBy('distrito')->all(), 'idDist', 'distrito'), ['class' => 'bootstrap-select', 'title' => 'Distrito:', 'data-actions-box' => 'true', 'multiple' => '']) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="adv-search-range-cont">	
                                    <label for="slider-range-price-value" class="adv-search-label">Precio:</label>
                                    <span>$</span>
                                    <input type="text" name="price" id="slider-range-price-value" readonly class="adv-search-amount">
                                    <div class="clearfix"></div>
                                    <div id="slider-range-price" data-min="0" data-max="<?= $price ?>" class="slider-range"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="adv-search-range-cont">	
                                    <label for="slider-range-area-value" class="adv-search-label">Area:</label>
                                    <span>m<sup>2</sup></span>
                                    <input type="text" name="area" id="slider-range-area-value" readonly class="adv-search-amount">
                                    <div class="clearfix"></div>
                                    <div id="slider-range-area" data-min="0" data-max="<?= $area ?>" class="slider-range"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="adv-search-range-cont">	
                                    <label for="slider-range-bedrooms-value" class="adv-search-label">Cuartos:</label>
                                    <input type="text" name="bedrooms" id="slider-range-bedrooms-value" readonly class="adv-search-amount">
                                    <div class="clearfix"></div>
                                    <div id="slider-range-bedrooms" data-min="1" data-max="<?= $bedrooms ?>" class="slider-range"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="adv-search-range-cont">	
                                    <label for="slider-range-bathrooms-value" class="adv-search-label">Ba&ntilde;os:</label>
                                    <input type="text" name="bathrooms" id="slider-range-bathrooms-value" readonly class="adv-search-amount">
                                    <div class="clearfix"></div>
                                    <div id="slider-range-bathrooms" data-min="1" data-max="<?= $bathrooms ?>" class="slider-range"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3 col-md-offset-6 col-lg-offset-9 adv-search-button-cont">
                        <a href="javascript:document.getElementById('formfindproperty').submit();" class="button-primary pull-right">
                            <span>buscar</span>
                            <div class="button-triangle"></div>
                            <div class="button-triangle2"></div>
                            <div class="button-icon"><i class="fa fa-search"></i></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </section>
    <section class="featured-offers parallax">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <h5 class="subtitle-margin second-color">aia</h5>
                    <h1 class="second-color">Recientemente agregadas<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <a href="#" class="navigation-box navigation-box-next" id="featured-offers-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
                    <a href="#" class="navigation-box navigation-box-prev" id="featured-offers-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>                                
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-secondary"></div>
                </div>
            </div>
        </div>
        <div class="featured-offers-container">
            <div class="owl-carousel" id="featured-offers-owl">
                <?= $this->context->getRecentlyAdded(); ?>
            </div>
        </div>
    </section>

    <section class="team section-light section-both-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <h5 class="subtitle-margin">conoce nuestros</h5>
                    <h1>equipo profesional<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <a href="#" class="navigation-box navigation-box-next" id="team-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
                    <a href="#" class="navigation-box navigation-box-prev"  id="team-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-primary"></div>
                </div>
            </div>
        </div>
        <div class="team-container">
            <div class="owl-carousel" id="team-owl">
                <?= $this->context->getAgentsSlider(); ?>                
            </div>
        </div>
    </section>
</div>