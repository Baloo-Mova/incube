<?php
/* @var $this yii\web\View */

use common\models\FormOfferProblem;
use common\models\FormOfferProjectFull;
use common\models\FormOfferInvestor;

$problems = FormOfferProblem::find()->where(['!=', 'status', 0])->all();
$projects = FormOfferProjectFull::find()->where(['!=', 'status', 0])->all();
$investors_offers = FormOfferInvestor::find()->where(['!=', 'status', 0])->all();
?>

<div class="row page-title text-center">
    <h2>Інвесторам</h2>
</div>
<hr/>
<div class="row content">
    <p><span> Інвестор </span> - це користувач, що вкладає кошти.</p>

    <ul class="nav"> Інвесторомами можуть виступати Юридичні та Фізичні особи, які можуть вкладувати кошти у інноваційний проект

    </ul>    

    <p>Якщо ви хочете виступити інвестором - заповніть наступну форму: </p>
    <div class="text-center">
        <a href="../investor/create" class="btn btn-lg btn-danger center">Подати заявку <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<hr/>
<div class="row">
    <div class="well well-sm">

        <div class="btn-group">

        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">

            <select>
                <option>Filter</option>
            </select>

        </div>
    </div>
</div>
<hr/>
<div class="row page-title text-center">

    <h2>Інвестор може вкласти кошти у наступне</h2>

</div>
<br/>
<div class="row">
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#popular" data-toggle="tab">Питання(проблеми) для вирішення</a></li>
                                <li><a href="#featured" data-toggle="tab">Запроновані проекти</a></li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start popular problems -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        <!-- start single product item -->

                                        <?php
                                        foreach ($problems as $i) {
                                            ?>
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img src="../img/250n300.png" alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/customer/view?id=' . $i->id) ?>"><span class="glyphicon glyphicon-arrow-right"></span>Продивитись</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><?= $i->problem_name ?></h4>
                                                        <!--<span class="aa-product-price">$<?= number_format(rand(60, 662000), 0, '.', '.') ?></span><span class="aa-product-price"><del>$65.50</del></span>-->
                                                    </figcaption>
                                                </figure>                     

                                                <!-- product id -->
                                                <span class="aa-badge aa-sale" href="#"><?= $i->id ?></span>
                                            </li>
<?php } ?>                                
                                    </ul>
                                    <a class="btn btn-success btn-lg" href="#">Усі питання <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / popular problem category -->

                                <!-- start prop-project category -->
                                <div class="tab-pane fade" id="featured">
                                    <ul class="aa-product-catg aa-featured-slider">
                                        <!-- start single product item -->
<?php foreach ($projects as $project) { ?> 
                                            <li>
                                                <figure>
                                                  <!--<a class="aa-product-img" href="#"><img src="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/img/projects_img/' . $project->id . '.jpg') ?>" alt="polo shirt img"></a>-->
                                                    <a class="aa-product-img" href="#"><img src="../img/250n300.png" alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/designer/view?id=' . $project->id) ?>"><span class="glyphicon glyphicon-arrow-right"></span>Продивитись</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"> <?= $project->project_name ?></h4>
                                                        <!--<span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>-->
                                                    </figcaption>
                                                </figure>                     

                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#"><?= $project->id ?></span>
                                            </li>
<?php } ?>                                                                        
                                    </ul>
                                    <a class="btn btn-success btn-lg" href="#">Усі запропоновані проекти<span class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / prop-projects category -->

                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- / popular section -->
</div>

<hr/>

<div class="row page-title text-center">

    <h2>Заявки на інвестування</h2>

</div>
<br/>
<div class="row">
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start popular problems -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        <!-- start single product item -->

<?php
foreach ($investors_offers as $inv_off) {
    ?>
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img src="../img/250n300.png" alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/investor/view?id=' . $inv_off->id) ?>"><span class="glyphicon glyphicon-arrow-right"></span>Продивитись</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><?= $inv_off->investor_name ?></h4>
                                                        <!--<span class="aa-product-price">$<?= number_format(rand(60, 662000), 0, '.', '.') ?></span><span class="aa-product-price"><del>$65.50</del></span>-->
                                                    </figcaption>
                                                </figure>                     

                                                <!-- product id -->
                                                <span class="aa-badge aa-sale" href="#"><?= $i->id ?></span>
                                            </li>
<?php } ?>                                
                                    </ul>
                                    <a class="btn btn-success btn-lg" href="#">Усі заявки <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / popular problem category -->



                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- / popular section -->
</div> 


