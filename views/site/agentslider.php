<div class="team-member-cont">
    <div class="team-member">
        <div class="team-photo">
            <img src="<?= isset($model->avatar) ? Yii::$app->request->baseUrl . "/uploads/user/" . $model->avatar : Yii::$app->request->baseUrl . "/images/avatar-generic.jpg"; ?>" alt="" />
            <div class="big-triangle"></div>
            <div class="big-triangle2"></div>
            <!--<a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>-->
            <div class="team-description">
                <div>
                    <div class="team-desc-line">
                        <span class="team-icon-circle">
                            <i class="fa fa-phone"></i>
                        </span>
                        <span><?= isset($model->phone) ? $model->phone : "No tiene"; ?></span>
                    </div>
                    <div class="team-desc-line">
                        <span class="team-icon-circle">
                            <i class="fa fa-envelope fa-sm"></i>
                        </span>
                        <span><?= isset($model->email) ? $model->email : "No tiene"; ?></span>
                    </div>
                    <!--                    <div class="team-social-cont">
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
                                        </div>-->
                    <!--                    <p class="team-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>-->
                </div>
            </div>
        </div>
        <div class="team-name">
            <h5><?= $model->getProfile()->one()->name ?></h5>
            <h4><?= $model->names . " " . $model->surnames ?><span class="special-color">.</span></h4>
        </div>
    </div>
</div>