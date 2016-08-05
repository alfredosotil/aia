<div class="row">
    <div class="col-xs-12 col-lg-6">
        <!--<h5 class="subtitle-margin">apartments for sale, colorodo, usa</h5>-->
        <h1><span id="counterPropertyOffers"><?= count($properties) ?></span> propiedades encontradas<span class="special-color">.</span></h1>
    </div>
    <div class="col-xs-12 col-lg-6">											
        <!--                            <div class="view-icons-container">
                                        <a class="view-box view-box-active"><img src="<?= Yii::$app->request->baseUrl; ?>/images/grid-icon.png" alt="" /></a>
                                        <a class="view-box" href=""><img src="<?= Yii::$app->request->baseUrl; ?>/images/list-icon.png" alt="" /></a>
                                    </div>-->
        <div class="order-by-container">
            <select id="sortProperties" class="bootstrap-select" title="Ordenar:">
                <option value="1">Precio menos a mas</option>
                <option value="2">Precio mas a menos</option>
                <option value="3">Area menos a mas</option>
                <option value="4">Area mas a menos</option>
            </select>
        </div>	
    </div>							
    <div class="col-xs-12">
        <div class="title-separator-primary"></div>
    </div>
</div> 
<div class="row list-offer-row">
    <div class="col-xs-12">
        <div id="propertyOffers">
            <?= $this->context->getPropertyOffers($properties, false) ?>
        </div>                            
    </div>
</div>
<div class="offer-pagination margin-top-30">
<!--                        <a href="#" class="prev"><i class="jfont">&#xe800;</i></a><a class="active">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#" class="next"><i class="jfont">&#xe802;</i></a>-->
    <div class="clearfix"></div>
</div>