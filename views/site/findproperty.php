<?php

use yii\helpers\ArrayHelper;
use app\models\Distrito;
use app\models\Property;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
$this->registerJs("
        $(document).on('submit', 'form#formfindproperty', function () {
            var form = $(this);
            // return false if form still have some validation errors
            if (form.find('.has-error').length) {
                 return false;
            }
            // submit form
//            $.ajax({
//                 url: form.attr('action'),
//                 type: 'post',
//                 data: form.serialize(),
//                 success: function (response) {
//                      // do something with response
//                 }
//            });
alert('hola');
            return false;
       });
    ", yii\web\View::POS_LOAD, uniqid());
?>
<div class="site-findproperty">
    <section class="adv-search-section no-padding">
        <div id="offers-map"></div>
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
                                    <div id="slider-range-price" data-min="0" data-max="500000" class="slider-range"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="adv-search-range-cont">	
                                    <label for="slider-range-area-value" class="adv-search-label">Area:</label>
                                    <span>m<sup>2</sup></span>
                                    <input type="text" name="area" id="slider-range-area-value" readonly class="adv-search-amount">
                                    <div class="clearfix"></div>
                                    <div id="slider-range-area" data-min="0" data-max="1000" class="slider-range"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="adv-search-range-cont">	
                                    <label for="slider-range-bedrooms-value" class="adv-search-label">Cuartos:</label>
                                    <input type="text" name="bedrooms" id="slider-range-bedrooms-value" readonly class="adv-search-amount">
                                    <div class="clearfix"></div>
                                    <div id="slider-range-bedrooms" data-min="1" data-max="10" class="slider-range"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="adv-search-range-cont">	
                                    <label for="slider-range-bathrooms-value" class="adv-search-label">Ba&ntilde;os:</label>
                                    <input type="text" name="bathrooms" id="slider-range-bathrooms-value" readonly class="adv-search-amount">
                                    <div class="clearfix"></div>
                                    <div id="slider-range-bathrooms" data-min="1" data-max="10" class="slider-range"></div>
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
    <section class="section-light section-top-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9 col-md-push-3">
                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <h5 class="subtitle-margin">apartments for sale, colorodo, usa</h5>
                            <h1>42 estates found<span class="special-color">.</span></h1>
                        </div>
                        <div class="col-xs-12 col-lg-6">											
                            <div class="view-icons-container">
                                <a class="view-box view-box-active"><img src="<?= Yii::$app->request->baseUrl; ?>/images/grid-icon.png" alt="" /></a>
                                <a class="view-box" href="listing-list.html"><img src="<?= Yii::$app->request->baseUrl; ?>/images/list-icon.png" alt="" /></a>
                            </div>
                            <div class="order-by-container">
                                <select name="sort" class="bootstrap-select" title="Order By:">
                                    <option>Price low to high</option>
                                    <option>Price high to low</option>
                                    <option>Area high to low</option>
                                    <option>Area high to low</option>
                                </select>
                            </div>	
                        </div>							
                        <div class="col-xs-12">
                            <div class="title-separator-primary"></div>
                        </div>
                    </div> 
                    <div class="row list-offer-row">
                        <div class="col-xs-12">
                            <?= $propertyOffers ?>
                        </div>
                    </div>
                    <div class="offer-pagination margin-top-30">
                        <a href="#" class="prev"><i class="jfont">&#xe800;</i></a><a class="active">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#" class="next"><i class="jfont">&#xe802;</i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-md-pull-9">
                    <div class="sidebar-left">
                        <h3 class="sidebar-title">Buscar<span class="special-color">.</span></h3>
                        <div class="title-separator-primary"></div>
                        <?php
                        $leftform = ActiveForm::begin([
                        'id' => 'leftformfindproperty',
//                                'type' => ActiveForm::TYPE_HORIZONTAL,
                        'action' => Url::toRoute("site/findproperty"),
                        'method' => 'post',
                        'options' => ['class' => 'adv-search-form'],
                        ]);
                        ?>
                        <div class="sidebar-select-cont">
                            <select name="transaction[]" class="bootstrap-select" title="Transaccion:" multiple>
                                <option value="3">Venta</option>
                                <option value="2">Alquiler</option>
                            </select>
                            <?= Html::dropDownList('district[]', null, ArrayHelper::map(Distrito::find()->where(["idProv" => 127])->orderBy('distrito')->all(), 'idDist', 'distrito'), ['class' => 'bootstrap-select', 'title' => 'Distrito:', 'data-actions-box' => 'true', 'multiple' => '']) ?>
                        </div>
                        <div class="adv-search-range-cont">	
                            <label for="slider-range-price-sidebar-value" class="adv-search-label">Precio:</label>
                            <span>$</span>
                            <input type="text" name="price" id="slider-range-price-sidebar-value" readonly class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-price-sidebar" data-min="0" data-max="500000" class="slider-range"></div>
                        </div>
                        <div class="adv-search-range-cont">	
                            <label for="slider-range-area-sidebar-value" class="adv-search-label">Area:</label>
                            <span>m<sup>2</sup></span>
                            <input type="text" name="area" id="slider-range-area-sidebar-value" readonly class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-area-sidebar" data-min="0" data-max="1000" class="slider-range"></div>
                        </div>
                        <div class="adv-search-range-cont">	
                            <label for="slider-range-bedrooms-sidebar-value" class="adv-search-label">Cuartos:</label>
                            <input type="text" name="bedrooms" id="slider-range-bedrooms-sidebar-value" readonly class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-bedrooms-sidebar" data-min="1" data-max="10" class="slider-range"></div>
                        </div>
                        <div class="adv-search-range-cont">	
                            <label for="slider-range-bathrooms-sidebar-value" class="adv-search-label">Ba&ntilde;os:</label>
                            <input type="text" name="bathrooms" id="slider-range-bathrooms-sidebar-value" readonly class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-bathrooms-sidebar" data-min="1" data-max="10" class="slider-range"></div>
                        </div>
                        <div class="sidebar-search-button-cont">
                            <a href="javascript:document.getElementById('leftformfindproperty').submit();" class="button-primary">
                                <span>buscar</span>
                                <div class="button-triangle"></div>
                                <div class="button-triangle2"></div>
                                <div class="button-icon"><i class="fa fa-search"></i></div>
                            </a>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-light top-padding-45 bottom-padding-45">
        <div class="container">
            <div class="row count-container">
                <div class="col-xs-6 col-lg-3">
                    <div class="number" id="number1">
                        <div class="number-img">	
                            <i class="fa fa-building"></i>
                        </div>
                        <span class="number-label text-color2">APARTAMENTOS</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="130" data-speed="2000"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border">
                    <div class="number" id="number2">
                        <div class="number-img">	
                            <i class="fa fa-home"></i>	
                        </div>			
                        <span class="number-label text-color2">CASAS</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="107" data-speed="2000"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border3">
                    <div class="number" id="number3">
                        <div class="number-img">	
                            <i class="fa fa-industry"></i>
                        </div>
                        <span class="number-label text-color2">COMERCIALES</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="149" data-speed="2000"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border">
                    <div class="number" id="number4">
                        <div class="number-img">
                            <i class="fa fa-tree"></i>
                        </div>
                        <span class="number-label text-color2">TERRENOS</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="25" data-speed="2000"></span>
                    </div>
                </div>
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
<?php
$properties = Property::find()->all();
$locations = [];
foreach ($properties as $p) {
    $locations[] = [
        $p->latitude,
        $p->longitude,
        Yii::$app->request->baseUrl . app\assets\AppAsset::getIconPingProperty($p->getType()->one()->type),
        yii\helpers\Url::to(["viewproperty", 'id' => $p->id]),
        Yii::$app->request->baseUrl . "/uploads/property/" . $p->getFirstImageFromProperty(),
        $p->address,
        Yii::$app->formatter->asCurrency($p->price, ($p->money === 'D') ? 'USD' : 'S/.')
    ];
}
$this->registerJs("offersMapInit('offers-map', " . json_encode($locations) . ");", yii\web\View::POS_LOAD, uniqid());
?>

<!--google maps initialization--> 
<script type="text/javascript">

</script>
