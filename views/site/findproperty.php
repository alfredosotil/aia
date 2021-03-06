<?php
/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
?>
<div class="site-findproperty">
    <section class="adv-search-section no-padding">
        <div id="offers-map"></div>
        <form class="adv-search-form" action="#">
            <div class="adv-search-cont">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-11 adv-search-icons">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs adv-search-tabs" role="tablist">
                                <li role="presentation" class="active" data-toggle="tooltip" data-placement="top" title="apartments"><a href="#apartments" aria-controls="apartments" role="tab" data-toggle="tab" id="adv-search-tab1"><i class="fa fa-building"></i></a></li>
                                <li role="presentation" data-toggle="tooltip" data-placement="top" title="houses"><a href="#houses" aria-controls="houses" role="tab" data-toggle="tab" id="adv-search-tab2"><i class="fa fa-home"></i></a></li>
                                <li role="presentation" data-toggle="tooltip" data-placement="top" title="commercials"><a href="#commercials" aria-controls="commercials" role="tab" data-toggle="tab" id="adv-search-tab3"><i class="fa fa-industry"></i></a></li>
                                <li role="presentation" data-toggle="tooltip" data-placement="top" title="lands"><a href="#lands" aria-controls="lands" role="tab" data-toggle="tab" id="adv-search-tab4"><i class="fa fa-tree"></i></a></li>
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
                                    <select name="transaction1" class="bootstrap-select" title="Transaction:" multiple>
                                        <option>For sale</option>
                                        <option>For rent</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="country1" class="bootstrap-select" title="Country:" multiple data-actions-box="true">

                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="city1" class="bootstrap-select" title="City:" multiple data-actions-box="true">
                                        <option>New York</option>
                                        <option>Los Angeles</option>
                                        <option>Chicago</option>
                                        <option>Houston</option>
                                        <option>Philadelphia</option>
                                        <option>Phoenix</option>
                                        <option>Washington</option>
                                        <option>Salt Lake City</option>
                                        <option>Detroit</option>
                                        <option>Boston</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="location1" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
                                        <option>Some location 1</option>
                                        <option>Some location 2</option>
                                        <option>Some location 3</option>
                                        <option>Some location 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">	
                                        <label for="slider-range-price1-value" class="adv-search-label">Price:</label>
                                        <span>$</span>
                                        <input type="text" id="slider-range-price1-value" readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-price1" data-min="0" data-max="300000" class="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">	
                                        <label for="slider-range-area1-value" class="adv-search-label">Area:</label>
                                        <span>m<sup>2</sup></span>
                                        <input type="text" id="slider-range-area1-value" readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-area1" data-min="0" data-max="180" class="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">	
                                        <label for="slider-range-bedrooms1-value" class="adv-search-label">Bedrooms:</label>
                                        <input type="text" id="slider-range-bedrooms1-value" readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-bedrooms1" data-min="1" data-max="10" class="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">	
                                        <label for="slider-range-bathrooms1-value" class="adv-search-label">Bathrooms:</label>
                                        <input type="text" id="slider-range-bathrooms1-value" readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-bathrooms1" data-min="1" data-max="4" class="slider-range"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade" id="houses">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="transaction2" class="bootstrap-select" title="Transaction:" multiple>
                                        <option>For sale</option>
                                        <option>For rent</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="country2" class="bootstrap-select" title="Country:" multiple data-actions-box="true">

                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="city2" class="bootstrap-select" title="City:" multiple data-actions-box="true">
                                        <option>New York</option>
                                        <option>Los Angeles</option>
                                        <option>Chicago</option>
                                        <option>Houston</option>
                                        <option>Philadelphia</option>
                                        <option>Phoenix</option>
                                        <option>Washington</option>
                                        <option>Salt Lake City</option>
                                        <option>Detroit</option>
                                        <option>Boston</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="location2" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
                                        <option>Some location 1</option>
                                        <option>Some location 2</option>
                                        <option>Some location 3</option>
                                        <option>Some location 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">	
                                        <label for="slider-range-price2-value" class="adv-search-label">Price:</label>
                                        <span>$</span>
                                        <input type="text" id="slider-range-price2-value" readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-price2" data-min="0" data-max="300000" class="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">	
                                        <label for="slider-range-area2-value" class="adv-search-label">Area:</label>
                                        <span>m<sup>2</sup></span>
                                        <input type="text" id="slider-range-area2-value" readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-area2" data-min="0" data-max="180" class="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">	
                                        <label for="slider-range-bedrooms2-value" class="adv-search-label">Bedrooms:</label>
                                        <input type="text" id="slider-range-bedrooms2-value" readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-bedrooms2" data-min="1" data-max="10" class="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">	
                                        <label for="slider-range-bathrooms2-value" class="adv-search-label">Bathrooms:</label>
                                        <input type="text" id="slider-range-bathrooms2-value" readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-bathrooms2" data-min="1" data-max="4" class="slider-range"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade" id="commercials">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="transaction3" class="bootstrap-select" title="Transaction:" multiple>
                                        <option>For sale</option>
                                        <option>For rent</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="country3" class="bootstrap-select" title="Country:" multiple data-actions-box="true">

                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="city3" class="bootstrap-select" title="City:" multiple data-actions-box="true">
                                        <option>New York</option>
                                        <option>Los Angeles</option>
                                        <option>Chicago</option>
                                        <option>Houston</option>
                                        <option>Philadelphia</option>
                                        <option>Phoenix</option>
                                        <option>Washington</option>
                                        <option>Salt Lake City</option>
                                        <option>Detroit</option>
                                        <option>Boston</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="location3" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
                                        <option>Some location 1</option>
                                        <option>Some location 2</option>
                                        <option>Some location 3</option>
                                        <option>Some location 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="type3" class="bootstrap-select short-margin" title="Type:" multiple>
                                        <option>Shop/service</option>
                                        <option>Factory</option>
                                        <option>Warehouse</option>
                                        <option>Office</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">	
                                        <label for="slider-range-price3-value" class="adv-search-label">Price:</label>
                                        <span>$</span>
                                        <input type="text" id="slider-range-price3-value" readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-price3" data-min="0" data-max="300000" class="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">	
                                        <label for="slider-range-area3-value" class="adv-search-label">Area:</label>
                                        <span>m<sup>2</sup></span>
                                        <input type="text" id="slider-range-area3-value" readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-area3" data-min="0" data-max="180" class="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">	
                                        <label for="slider-range-bedrooms3-value" class="adv-search-label">Rooms:</label>
                                        <input type="text" id="slider-range-bedrooms3-value" readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-bedrooms3" data-min="1" data-max="10" class="slider-range"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade" id="lands">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="transaction4" class="bootstrap-select" title="Transaction:" multiple>
                                        <option>For sale</option>
                                        <option>For rent</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="country4" class="bootstrap-select" title="Country:" multiple data-actions-box="true">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="city4" class="bootstrap-select" title="City:" multiple data-actions-box="true">
                                        <option>New York</option>
                                        <option>Los Angeles</option>
                                        <option>Chicago</option>
                                        <option>Houston</option>
                                        <option>Philadelphia</option>
                                        <option>Phoenix</option>
                                        <option>Washington</option>
                                        <option>Salt Lake City</option>
                                        <option>Detroit</option>
                                        <option>Boston</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="location4" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
                                        <option>Some location 1</option>
                                        <option>Some location 2</option>
                                        <option>Some location 3</option>
                                        <option>Some location 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="type4" class="bootstrap-select short-margin" title="Type:" multiple>
                                        <option>Field</option>
                                        <option>Recreational</option>
                                        <option>Orchard</option>
                                        <option>Forest</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">	
                                        <label for="slider-range-price4-value" class="adv-search-label">Price:</label>
                                        <span>$</span>
                                        <input type="text" id="slider-range-price4-value" readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-price4" data-min="0" data-max="300000" class="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">	
                                        <label for="slider-range-area4-value" class="adv-search-label">Area:</label>
                                        <span>ha</span>
                                        <input type="text" id="slider-range-area4-value" readonly class="adv-search-amount">
                                        <div class="clearfix"></div>
                                        <div id="slider-range-area4" data-min="0" data-max="500" class="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3 col-md-offset-6 col-lg-offset-9 adv-search-button-cont">
                            <a href="#" class="button-primary pull-right">
                                <span>search</span>
                                <div class="button-triangle"></div>
                                <div class="button-triangle2"></div>
                                <div class="button-icon"><i class="fa fa-search"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

<!--    <section class="section-light bottom-padding-45 section-both-shadow">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="feature wow fadeInLeft" id="feature1">
                        <div class="feature-icon center-block"><i class="fa fa-building"></i></div>
                        <div class="feature-text">
                            <h5 class="subtitle-margin">PIXEL PERFECT</h5>
                            <h3>DESIGN<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                        </div>
                    </div>
                </div>			
                <div class="col-sm-6 col-lg-3">
                    <div class="feature wow fadeInUp" id="feature2">
                        <div class="feature-icon center-block"><i class="fa fa-home"></i></div>
                        <div class="feature-text">
                            <h5 class="subtitle-margin">FIFTY</h5>
                            <h3>HTML FILES<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                        </div>
                    </div>
                </div>			
                <div class="col-sm-6 col-lg-3">
                    <div class="feature wow fadeInUp" id="feature3">
                        <div class="feature-icon center-block"><i class="fa fa-industry"></i></div>
                        <div class="feature-text">
                            <h5 class="subtitle-margin">MASONRY, LIST &amp; GRID</h5>
                            <h3>LAYOUTS<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                        </div>
                    </div>
                </div>			
                <div class="col-sm-6 col-lg-3">
                    <div class="feature wow fadeInRight" id="feature4">
                        <div class="feature-icon center-block"><i class="fa fa-tree"></i></div>
                        <div class="feature-text">
                            <h5 class="subtitle-margin">MODERN &amp; CLEAN</h5>
                            <h3>PROJECT<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
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
                                <a class="view-box view-box-active"><img src="images/grid-icon.png" alt="" /></a>
                                <a class="view-box" href="listing-list.html"><img src="images/list-icon.png" alt="" /></a>
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
                    <div class="row grid-offer-row">
                        <div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">

                                    <div class="grid-offer-photo">
                                        <img src="images/grid-offer1.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">apartment</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">34 Fort Collins, Colorado 80523, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 320 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="images/area-icon.png" alt="" />54m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="images/rooms-icon.png" alt="" />3
                                        </div>
                                        <div class="grid-baths">
                                            <img src="images/bathrooms-icon.png" alt="" />1
                                        </div>							
                                    </div>	

                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map1" class="grid-offer-map"></div>
                                    <div class="button">	
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>							
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="images/grid-offer2.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">apartment</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">West Fourth Street, New York 10003, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 299 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="images/area-icon.png" alt="" />48m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="images/rooms-icon.png" alt="" />2
                                        </div>
                                        <div class="grid-baths">
                                            <img src="images/bathrooms-icon.png" alt="" />1
                                        </div>							
                                    </div>	
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map2" class="grid-offer-map"></div>
                                    <div class="button">	
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="images/grid-offer3.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">apartment</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">E. Elwood St. Phoenix, AZ 85034, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 400 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="images/area-icon.png" alt="" />93m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="images/rooms-icon.png" alt="" />4
                                        </div>
                                        <div class="grid-baths">
                                            <img src="images/bathrooms-icon.png" alt="" />2
                                        </div>							
                                    </div>	
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map3" class="grid-offer-map"></div>
                                    <div class="button">	
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="images/grid-offer4.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">house</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">N. Willamette Blvd., Portland, OR 97203, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 800 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="images/area-icon.png" alt="" />300m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="images/rooms-icon.png" alt="" />8
                                        </div>
                                        <div class="grid-baths">
                                            <img src="images/bathrooms-icon.png" alt="" />3
                                        </div>							
                                    </div>	
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map4" class="grid-offer-map"></div>
                                    <div class="button">	
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="images/grid-offer5.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">apartment</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">One Brookings Drive St. Louis, Missouri 63130, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 320 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="images/area-icon.png" alt="" />50m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="images/rooms-icon.png" alt="" />2
                                        </div>
                                        <div class="grid-baths">
                                            <img src="images/bathrooms-icon.png" alt="" />1
                                        </div>							
                                    </div>	
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map5" class="grid-offer-map"></div>
                                    <div class="button">	
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="images/grid-offer7.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">house</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">One Neumann Drive Aston, Philadelphia 19014, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 500 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="images/area-icon.png" alt="" />210m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="images/rooms-icon.png" alt="" />6
                                        </div>
                                        <div class="grid-baths">
                                            <img src="images/bathrooms-icon.png" alt="" />2
                                        </div>							
                                    </div>	
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map6" class="grid-offer-map"></div>
                                    <div class="button">	
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">

                                    <div class="grid-offer-photo">
                                        <img src="images/grid-offer1.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">apartment</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">34 Fort Collins, Colorado 80523, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 320 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="images/area-icon.png" alt="" />54m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="images/rooms-icon.png" alt="" />3
                                        </div>
                                        <div class="grid-baths">
                                            <img src="images/bathrooms-icon.png" alt="" />1
                                        </div>							
                                    </div>	

                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map7" class="grid-offer-map"></div>
                                    <div class="button">	
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="images/grid-offer2.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">apartment</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">West Fourth Street, New York 10003, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 299 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="images/area-icon.png" alt="" />48m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="images/rooms-icon.png" alt="" />2
                                        </div>
                                        <div class="grid-baths">
                                            <img src="images/bathrooms-icon.png" alt="" />1
                                        </div>							
                                    </div>	
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map8" class="grid-offer-map"></div>
                                    <div class="button">	
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="images/grid-offer3.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">apartment</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">E. Elwood St. Phoenix, AZ 85034, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 400 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="images/area-icon.png" alt="" />93m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="images/rooms-icon.png" alt="" />4
                                        </div>
                                        <div class="grid-baths">
                                            <img src="images/bathrooms-icon.png" alt="" />2
                                        </div>							
                                    </div>	
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map9" class="grid-offer-map"></div>
                                    <div class="button">	
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="images/grid-offer4.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">house</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">N. Willamette Blvd., Portland, OR 97203, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 800 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="images/area-icon.png" alt="" />300m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="images/rooms-icon.png" alt="" />8
                                        </div>
                                        <div class="grid-baths">
                                            <img src="images/bathrooms-icon.png" alt="" />3
                                        </div>							
                                    </div>	
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map10" class="grid-offer-map"></div>
                                    <div class="button">	
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="images/grid-offer5.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">apartment</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">One Brookings Drive St. Louis, Missouri 63130, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 320 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="images/area-icon.png" alt="" />50m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="images/rooms-icon.png" alt="" />2
                                        </div>
                                        <div class="grid-baths">
                                            <img src="images/bathrooms-icon.png" alt="" />1
                                        </div>							
                                    </div>	
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map11" class="grid-offer-map"></div>
                                    <div class="button">	
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4 grid-offer-col">
                            <div class="grid-offer">
                                <div class="grid-offer-front">
                                    <div class="grid-offer-photo">
                                        <img src="images/grid-offer7.jpg" alt="" />
                                        <div class="type-container">
                                            <div class="estate-type">house</div>
                                            <div class="transaction-type">sale</div>
                                        </div>
                                    </div>
                                    <div class="grid-offer-text">
                                        <i class="fa fa-map-marker grid-offer-localization"></i>
                                        <div class="grid-offer-h4"><h4 class="grid-offer-title">One Neumann Drive Aston, Philadelphia 19014, USA</h4></div>
                                        <div class="clearfix"></div>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="price-grid-cont">
                                        <div class="grid-price-label pull-left">Price:</div>
                                        <div class="grid-price pull-right">
                                            $ 500 000
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-offer-params">
                                        <div class="grid-area">
                                            <img src="images/area-icon.png" alt="" />210m<sup>2</sup>
                                        </div>
                                        <div class="grid-rooms">
                                            <img src="images/rooms-icon.png" alt="" />6
                                        </div>
                                        <div class="grid-baths">
                                            <img src="images/bathrooms-icon.png" alt="" />2
                                        </div>							
                                    </div>	
                                </div>
                                <div class="grid-offer-back">
                                    <div id="grid-map12" class="grid-offer-map"></div>
                                    <div class="button">	
                                        <a href="estate-details-right-sidebar.html" class="button-primary">
                                            <span>read more</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-search"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="offer-pagination margin-top-30">
                        <a href="#" class="prev"><i class="jfont">&#xe800;</i></a><a class="active">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#" class="next"><i class="jfont">&#xe802;</i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-md-pull-9">
                    <div class="sidebar-left">
                        <h3 class="sidebar-title">narrow search<span class="special-color">.</span></h3>
                        <div class="title-separator-primary"></div>

                        <div class="sidebar-select-cont">
                            <select name="transaction1" class="bootstrap-select" title="Transaction:" multiple>
                                <option>For sale</option>
                                <option>For rent</option>
                            </select>
                            <select name="conuntry1" class="bootstrap-select" title="Country:" multiple data-actions-box="true">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                            </select>
                            <select name="city1" class="bootstrap-select" title="City:" multiple data-actions-box="true">
                                <option>New York</option>
                                <option>Los Angeles</option>
                                <option>Chicago</option>
                                <option>Houston</option>
                                <option>Philadelphia</option>
                                <option>Phoenix</option>
                                <option>Washington</option>
                                <option>Salt Lake Cty</option>
                                <option>Detroit</option>
                                <option>Boston</option>
                            </select>					
                            <select name="location1" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
                                <option>Some location 1</option>
                                <option>Some location 2</option>
                                <option>Some location 3</option>
                                <option>Some location 4</option>
                            </select>
                        </div>
                        <div class="adv-search-range-cont">	
                            <label for="slider-range-price-sidebar-value" class="adv-search-label">Price:</label>
                            <span>$</span>
                            <input type="text" id="slider-range-price-sidebar-value" readonly class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-price-sidebar" data-min="0" data-max="300000" class="slider-range"></div>
                        </div>
                        <div class="adv-search-range-cont">	
                            <label for="slider-range-area-sidebar-value" class="adv-search-label">Area:</label>
                            <span>m<sup>2</sup></span>
                            <input type="text" id="slider-range-area-sidebar-value" readonly class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-area-sidebar" data-min="0" data-max="180" class="slider-range"></div>
                        </div>
                        <div class="adv-search-range-cont">	
                            <label for="slider-range-bedrooms-sidebar-value" class="adv-search-label">Bedrooms:</label>
                            <input type="text" id="slider-range-bedrooms-sidebar-value" readonly class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-bedrooms-sidebar" data-min="1" data-max="10" class="slider-range"></div>
                        </div>
                        <div class="adv-search-range-cont">	
                            <label for="slider-range-bathrooms-sidebar-value" class="adv-search-label">Bathrooms:</label>
                            <input type="text" id="slider-range-bathrooms-sidebar-value" readonly class="adv-search-amount">
                            <div class="clearfix"></div>
                            <div id="slider-range-bathrooms-sidebar" data-min="1" data-max="4" class="slider-range"></div>
                        </div>
                        <div class="sidebar-search-button-cont">
                            <a href="#" class="button-primary">
                                <span>search</span>
                                <div class="button-triangle"></div>
                                <div class="button-triangle2"></div>
                                <div class="button-icon"><i class="fa fa-search"></i></div>
                            </a>
                        </div>
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
                        <span class="number-label text-color2">APARTMENTS</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="130" data-speed="2000"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border">
                    <div class="number" id="number2">
                        <div class="number-img">	
                            <i class="fa fa-home"></i>	
                        </div>			
                        <span class="number-label text-color2">HOUSES</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="107" data-speed="2000"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border3">
                    <div class="number" id="number3">
                        <div class="number-img">	
                            <i class="fa fa-industry"></i>
                        </div>
                        <span class="number-label text-color2">COMMERCIAL</span>
                        <span class="number-big text-color3 count" data-from="0" data-to="149" data-speed="2000"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3 number_border">
                    <div class="number" id="number4">
                        <div class="number-img">
                            <i class="fa fa-tree"></i>
                        </div>
                        <span class="number-label text-color2">LAND</span>
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
                    <h5 class="subtitle-margin">meet our</h5>
                    <h1>proffesional team<span class="special-color">.</span></h1>
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
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/agent1.jpg" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span>(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span>apartment@domain.tld</span>
                                    </div>
                                    <div class="team-social-cont">
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="team-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>manager</h5>
                            <h4>Mark Smith<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/agent2.jpg" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span>(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span>apartment@domain.tld</span>
                                    </div>
                                    <div class="team-social-cont">
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="team-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>Agent</h5>
                            <h4>Michelle Jackson<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/agent3.jpg" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span>(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span>apartment@domain.tld</span>
                                    </div>
                                    <div class="team-social-cont">
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="team-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>specialist</h5>
                            <h4>Robert Duncan<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/agent4.jpg" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span>(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span>apartment@domain.tld</span>
                                    </div>
                                    <div class="team-social-cont">
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="team-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>agent</h5>
                            <h4>Veronica Green<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/agent5.jpg" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span>(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span>apartment@domain.tld</span>
                                    </div>
                                    <div class="team-social-cont">
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="team-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>agent</h5>
                            <h4>Timothe Lee<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/images/agent6.jpg" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span>(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span>apartment@domain.tld</span>
                                    </div>
                                    <div class="team-social-cont">
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="team-social">
                                            <a class="team-icon-circle" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="team-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>agent</h5>
                            <h4>Joanne Doe<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--    <section class="testimonials parallax">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <h5 class="subtitle-margin second-color">recommendations</h5>
                    <h1 class="second-color">our clients say<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <a href="#" class="navigation-box navigation-box-next" id="testimonials-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
                    <a href="#" class="navigation-box navigation-box-prev" id="testimonials-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-secondary"></div>
                </div>
            </div>
        </div>

        <div class="container margin-top-90">
            <div class="row">
                <div class="col-xs-12 owl-carousel" id="testimonials-owl">
                    <div class="testimonial">
                        <img src="<?= Yii::$app->request->baseUrl; ?>/images/testimonials1.jpg" alt="" class="testimonials-photo" />	
                        <div class="testimonials-content">							
                            <p class="lead">Smith’s Family</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        </div>
                        <div class="big-triangle">							
                        </div>
                        <div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
                    </div>
                    <div class="testimonial">
                        <img src="<?= Yii::$app->request->baseUrl; ?>/images/testimonials2.jpg" alt="" class="testimonials-photo" />	
                        <div class="testimonials-content">
                            <p class="lead">Meggy Johnson</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="big-triangle">							
                            </div>
                            <div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <img src="<?= Yii::$app->request->baseUrl; ?>/images/testimonials3.jpg" alt="" class="testimonials-photo" />
                        <div class="testimonials-content">
                            <p class="lead">Paola Brown &amp; Tommy</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="big-triangle">							
                            </div>
                            <div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>-->

<!--    <section class="section-light no-bottom-padding section-top-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <h5 class="subtitle-margin">hot</h5>
                    <h1>new listings<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <a href="#" class="navigation-box navigation-box-next" id="grid-offers-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
                    <a href="#" class="navigation-box navigation-box-prev" id="grid-offers-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-primary"></div>
                </div>
            </div>
        </div>
        <div class="grid-offers-container">
            <div class="owl-carousel" id="grid-offers-owl">
                <div class="grid-offer-col">
                    <div class="grid-offer">
                        <div class="grid-offer-front">				
                            <div class="grid-offer-photo">
                                <img src="<?= Yii::$app->request->baseUrl; ?>/images/grid-offer1.jpg" alt="" />
                                <div class="type-container">
                                    <div class="estate-type">apartment</div>
                                    <div class="transaction-type">sale</div>
                                </div>
                            </div>
                            <div class="grid-offer-text">
                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                <div class="grid-offer-h4"><h4 class="grid-offer-title">34 Fort Collins, Colorado 80523, USA</h4></div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price-grid-cont">
                                <div class="grid-price-label pull-left">Price:</div>
                                <div class="grid-price pull-right">
                                    $ 320 000
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="grid-offer-params">
                                <div class="grid-area">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/area-icon.png" alt="" />54m<sup>2</sup>
                                </div>
                                <div class="grid-rooms">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/rooms-icon.png" alt="" />3
                                </div>
                                <div class="grid-baths">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/bathrooms-icon.png" alt="" />1
                                </div>							
                            </div>	

                        </div>
                        <div class="grid-offer-back">
                            <div id="grid-map1" class="grid-offer-map"></div>
                            <div class="button">	
                                <a href="estate-details-right-sidebar.html" class="button-primary">
                                    <span>read more</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-offer-col">
                    <div class="grid-offer">
                        <div class="grid-offer-front">
                            <div class="grid-offer-photo">
                                <img src="<?= Yii::$app->request->baseUrl; ?>/images/grid-offer2.jpg" alt="" />
                                <div class="type-container">
                                    <div class="estate-type">apartment</div>
                                    <div class="transaction-type">sale</div>
                                </div>
                            </div>
                            <div class="grid-offer-text">
                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                <div class="grid-offer-h4"><h4 class="grid-offer-title">West Fourth Street, New York 10003, USA</h4></div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price-grid-cont">
                                <div class="grid-price-label pull-left">Price:</div>
                                <div class="grid-price pull-right">
                                    $ 299 000
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="grid-offer-params">
                                <div class="grid-area">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/area-icon.png" alt="" />48m<sup>2</sup>
                                </div>
                                <div class="grid-rooms">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/rooms-icon.png" alt="" />2
                                </div>
                                <div class="grid-baths">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/bathrooms-icon.png" alt="" />1
                                </div>							
                            </div>	
                        </div>
                        <div class="grid-offer-back">
                            <div id="grid-map2" class="grid-offer-map"></div>
                            <div class="button">	
                                <a href="estate-details-right-sidebar.html" class="button-primary">
                                    <span>read more</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-offer-col">
                    <div class="grid-offer">
                        <div class="grid-offer-front">
                            <div class="grid-offer-photo">
                                <img src="<?= Yii::$app->request->baseUrl; ?>/images/grid-offer3.jpg" alt="" />
                                <div class="type-container">
                                    <div class="estate-type">apartment</div>
                                    <div class="transaction-type">sale</div>
                                </div>
                            </div>
                            <div class="grid-offer-text">
                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                <div class="grid-offer-h4"><h4 class="grid-offer-title">E. Elwood St. Phoenix, AZ 85034, USA</h4></div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price-grid-cont">
                                <div class="grid-price-label pull-left">Price:</div>
                                <div class="grid-price pull-right">
                                    $ 400 000
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="grid-offer-params">
                                <div class="grid-area">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/area-icon.png" alt="" />93m<sup>2</sup>
                                </div>
                                <div class="grid-rooms">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/rooms-icon.png" alt="" />4
                                </div>
                                <div class="grid-baths">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/bathrooms-icon.png" alt="" />2
                                </div>							
                            </div>	
                        </div>
                        <div class="grid-offer-back">
                            <div id="grid-map3" class="grid-offer-map"></div>
                            <div class="button">	
                                <a href="estate-details-right-sidebar.html" class="button-primary">
                                    <span>read more</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-offer-col">
                    <div class="grid-offer">
                        <div class="grid-offer-front">
                            <div class="grid-offer-photo">
                                <img src="<?= Yii::$app->request->baseUrl; ?>/images/grid-offer4.jpg" alt="" />
                                <div class="type-container">
                                    <div class="estate-type">house</div>
                                    <div class="transaction-type">sale</div>
                                </div>
                            </div>
                            <div class="grid-offer-text">
                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                <div class="grid-offer-h4"><h4 class="grid-offer-title">N. Willamette Blvd., Portland, OR 97203, USA</h4></div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price-grid-cont">
                                <div class="grid-price-label pull-left">Price:</div>
                                <div class="grid-price pull-right">
                                    $ 800 000
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="grid-offer-params">
                                <div class="grid-area">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/area-icon.png" alt="" />300m<sup>2</sup>
                                </div>
                                <div class="grid-rooms">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/rooms-icon.png" alt="" />8
                                </div>
                                <div class="grid-baths">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/bathrooms-icon.png" alt="" />3
                                </div>							
                            </div>	
                        </div>
                        <div class="grid-offer-back">
                            <div id="grid-map4" class="grid-offer-map"></div>
                            <div class="button">	
                                <a href="estate-details-right-sidebar.html" class="button-primary">
                                    <span>read more</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-offer-col">
                    <div class="grid-offer">
                        <div class="grid-offer-front">
                            <div class="grid-offer-photo">
                                <img src="<?= Yii::$app->request->baseUrl; ?>/images/grid-offer5.jpg" alt="" />
                                <div class="type-container">
                                    <div class="estate-type">apartment</div>
                                    <div class="transaction-type">sale</div>
                                </div>
                            </div>
                            <div class="grid-offer-text">
                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                <div class="grid-offer-h4"><h4 class="grid-offer-title">One Brookings Drive St. Louis, Missouri 63130, USA</h4></div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price-grid-cont">
                                <div class="grid-price-label pull-left">Price:</div>
                                <div class="grid-price pull-right">
                                    $ 320 000
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="grid-offer-params">
                                <div class="grid-area">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/area-icon.png" alt="" />50m<sup>2</sup>
                                </div>
                                <div class="grid-rooms">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/rooms-icon.png" alt="" />2
                                </div>
                                <div class="grid-baths">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/bathrooms-icon.png" alt="" />1
                                </div>							
                            </div>	
                        </div>
                        <div class="grid-offer-back">
                            <div id="grid-map5" class="grid-offer-map"></div>
                            <div class="button">	
                                <a href="estate-details-right-sidebar.html" class="button-primary">
                                    <span>read more</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-offer-col">
                    <div class="grid-offer">
                        <div class="grid-offer-front">
                            <div class="grid-offer-photo">
                                <img src="<?= Yii::$app->request->baseUrl; ?>/images/grid-offer7.jpg" alt="" />
                                <div class="type-container">
                                    <div class="estate-type">house</div>
                                    <div class="transaction-type">sale</div>
                                </div>
                            </div>
                            <div class="grid-offer-text">
                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                <div class="grid-offer-h4"><h4 class="grid-offer-title">One Neumann Drive Aston, Philadelphia 19014, USA</h4></div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price-grid-cont">
                                <div class="grid-price-label pull-left">Price:</div>
                                <div class="grid-price pull-right">
                                    $ 500 000
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="grid-offer-params">
                                <div class="grid-area">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/area-icon.png" alt="" />210m<sup>2</sup>
                                </div>
                                <div class="grid-rooms">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/rooms-icon.png" alt="" />6
                                </div>
                                <div class="grid-baths">
                                    <img src="<?= Yii::$app->request->baseUrl; ?>/images/bathrooms-icon.png" alt="" />2
                                </div>							
                            </div>	
                        </div>
                        <div class="grid-offer-back">
                            <div id="grid-map6" class="grid-offer-map"></div>
                            <div class="button">	
                                <a href="estate-details-right-sidebar.html" class="button-primary">
                                    <span>read more</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

<!--    <section class="section-dark">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <h5 class="subtitle-margin">latest from</h5>
                    <h1 class="">our blog<span class="special-color">.</span></h1>
                </div>

                <div class="col-xs-12">
                    <div class="title-separator-primary"></div>
                </div>
            </div>
        </div>
        <div class="container blog-grid1-container">
            <div class="row">
                <div class="col-md-12 col-lg-6 blog-grid1-left-col">
                    <article class="blog-grid1-item zoom-cont">
                        <figure class=""><a href="blog-right-sidebar.html"><img src="<?= Yii::$app->request->baseUrl; ?>/images/blog-grid1a.jpg" alt="" class="zoom" /></a></figure>
                        <div class="blog-grid1-post-content">
                            <div class="blog-grid1-topline">
                                <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                <div class="clearfix"></div>
                            </div>
                            <a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>It’s much cheaper to buy than to rent</h4></a>
                            <div class="blog-grid1-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet...</p>
                            <a href="blog-right-sidebar.html" class="blog-grid1-button">
                                <span>read more</span>
                                <div class="blog-grid1-triangle"></div>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-md-12 col-lg-6 blog-grid1-right-col">
                    <article class="blog-grid1-item zoom-cont">
                        <figure class=""><a href="blog-right-sidebar.html"><img src="<?= Yii::$app->request->baseUrl; ?>/images/blog-grid1b.jpg" alt="" class="zoom" /></a></figure>
                        <div class="blog-grid1-post-content">
                            <div class="blog-grid1-topline">
                                <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                <div class="clearfix"></div>
                            </div>
                            <a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>It’s much cheaper to buy than to rent</h4></a>
                            <div class="blog-grid1-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet...</p>
                            <a href="blog-right-sidebar.html" class="blog-grid1-button">
                                <span>read more</span>
                                <div class="blog-grid1-triangle"></div>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-md-12 col-lg-6 blog-grid1-left-col">
                    <article class="blog-grid1-item zoom-cont">
                        <div class="blog-grid1-post-content">
                            <div class="blog-grid1-topline">
                                <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                <div class="clearfix"></div>
                            </div>
                            <a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>It’s much cheaper to buy than to rent</h4></a>
                            <div class="blog-grid1-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet...</p>
                            <a href="blog-right-sidebar.html" class="blog-grid1-button-right">
                                <span>read more</span>
                                <div class="blog-grid1-triangle"></div>
                            </a>
                        </div>
                        <figure class=""><a href="blog-right-sidebar.html"><img src="<?= Yii::$app->request->baseUrl; ?>/images/blog-grid1e.jpg" alt="" class="zoom" /></a></figure>
                    </article>
                </div>
                <div class="col-md-12 col-lg-6 blog-grid1-right-col">
                    <article class="blog-grid1-item zoom-cont">
                        <div class="blog-grid1-post-content">
                            <div class="blog-grid1-topline">
                                <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
                                <div class="clearfix"></div>
                            </div>
                            <a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>It’s much cheaper to buy than to rent</h4></a>
                            <div class="blog-grid1-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet...</p>
                            <a href="blog-right-sidebar.html" class="blog-grid1-button-right">
                                <span>read more</span>
                                <div class="blog-grid1-triangle"></div>
                            </a>
                        </div>
                        <figure class=""><a href="blog-right-sidebar.html"><img src="<?= Yii::$app->request->baseUrl; ?>/images/blog-grid1d.jpg" alt="" class="zoom" /></a></figure>
                    </article>
                </div>
            </div>
        </div>
    </section>-->

</div>

<!--Google Maps--> 


<!--google maps initialization--> 
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        var locations = [
            [40.6128, -73.9976, "<?= Yii::$app->request->baseUrl; ?>/images/pin-apartment.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer1.jpg", "Fort Collins, Colorado 80523, USA", "$320 000"],
            [40.6128, -73.9976, "<?= Yii::$app->request->baseUrl; ?>/images/pin-apartment.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer7.jpg", "Fort Collins, Colorado 80523, USA", "$330 000"],
            [40.6128, -73.9976, "<?= Yii::$app->request->baseUrl; ?>/images/pin-apartment.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer3.jpg", "Fort Collins, Colorado 80523, USA", "$310 000"],
            [40.7222, -73.7903, "<?= Yii::$app->request->baseUrl; ?>/images/pin-commercial.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer2.jpg", "West Fourth Street, New York 10003, USA", "$350 000"],
            [41.0306, -73.7669, "<?= Yii::$app->request->baseUrl; ?>/images/pin-house.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer3.jpg", "E. Elwood St. Phoenix, AZ 85034, USA", "$300 000"],
            [41.3006, -72.9440, "<?= Yii::$app->request->baseUrl; ?>/images/pin-apartment.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer4.jpg", "Fort Collins, Colorado 80523, USA", "$410 000"],
            [42.2418, -74.3626, "<?= Yii::$app->request->baseUrl; ?>/images/pin-land.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer5.jpg", "West Fourth Street, New York 10003, USA", "$295 000"],
            [38.8974, -77.0365, "<?= Yii::$app->request->baseUrl; ?>/images/pin-house.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer6.jpg", "E. Elwood St. Phoenix, AZ 85034, USA", "$390 600"],
            [38.7860, -77.0129, "<?= Yii::$app->request->baseUrl; ?>/images/pin-apartment.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer7.jpg", "Fort Collins, Colorado 80523, USA", "$299 000"],
            [41.2693, -70.0874, "<?= Yii::$app->request->baseUrl; ?>/images/pin-house.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer8.jpg", "Fort Collins, Colorado 80523, USA", "$600 000"],
            [33.7544, -84.3857, "<?= Yii::$app->request->baseUrl; ?>/images/pin-commercial.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer9.jpg", "West Fourth Street, New York 10003, USA", "$350 000"],
            [33.7337, -84.4443, "<?= Yii::$app->request->baseUrl; ?>/images/pin-house.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer10.jpg", "E. Elwood St. Phoenix, AZ 85034, USA", "$550 000"],
            [33.8588, -84.4858, "<?= Yii::$app->request->baseUrl; ?>/images/pin-land.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer1.jpg", "E. Elwood St. Phoenix, AZ 85034, USA", "$670 000"],
            [34.0254, -84.3560, "<?= Yii::$app->request->baseUrl; ?>/images/pin-commercial.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer5.jpg", "E. Elwood St. Phoenix, AZ 85034, USA", "$300 000"],
            [39.6282, -86.1320, "<?= Yii::$app->request->baseUrl; ?>/images/pin-apartment.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer6.jpg", "E. Elwood St. Phoenix, AZ 85034, USA", "$390 600"],
            [40.5521, -84.5658, "<?= Yii::$app->request->baseUrl; ?>/images/pin-apartment.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer2.jpg", "West Fourth Street, New York 10003, USA", "$350 000"],
            [41.6926, -87.6021, "<?= Yii::$app->request->baseUrl; ?>/images/pin-house.png", "estate-details-right-sidebar.html", "<?= Yii::$app->request->baseUrl; ?>/images/infobox-offer5.jpg", "E. Elwood St. Phoenix, AZ 85034, USA", "$300 000"]
        ];

        offersMapInit("offers-map", locations);
        mapInit(40.6128, -73.7903, "featured-map1", "<?= Yii::$app->request->baseUrl; ?>/images/pin-house.png", false);
        mapInit(40.7222, -73.7903, "featured-map2", "<?= Yii::$app->request->baseUrl; ?>/images/pin-apartment.png", false);
        mapInit(41.0306, -73.7669, "featured-map3", "<?= Yii::$app->request->baseUrl; ?>/images/pin-land.png", false);
        mapInit(41.3006, -72.9440, "featured-map4", "<?= Yii::$app->request->baseUrl; ?>/images/pin-commercial.png", false);
        mapInit(42.2418, -74.3626, "featured-map5", "<?= Yii::$app->request->baseUrl; ?>/images/pin-house.png", false);
        mapInit(38.8974, -77.0365, "featured-map6", "<?= Yii::$app->request->baseUrl; ?>/images/pin-apartment.png", false);
        mapInit(38.7860, -77.0129, "featured-map7", "<?= Yii::$app->request->baseUrl; ?>/images/pin-house.png", false);

        mapInit(41.2693, -70.0874, "grid-map1", "<?= Yii::$app->request->baseUrl; ?>/images/pin-house.png", false);
        mapInit(33.7544, -84.3857, "grid-map2", "<?= Yii::$app->request->baseUrl; ?>/images/pin-apartment.png", false);
        mapInit(33.7337, -84.4443, "grid-map3", "<?= Yii::$app->request->baseUrl; ?>/images/pin-land.png", false);
        mapInit(33.8588, -84.4858, "grid-map4", "<?= Yii::$app->request->baseUrl; ?>/images/pin-commercial.png", false);
        mapInit(34.0254, -84.3560, "grid-map5", "<?= Yii::$app->request->baseUrl; ?>/images/pin-apartment.png", false);
        mapInit(40.6128, -73.9976, "grid-map6", "<?= Yii::$app->request->baseUrl; ?>/images/pin-house.png", false);
    }
</script>
