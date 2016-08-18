<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProjectFull */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-offer-project-full-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'author_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false, ['style' => 'display:none']) ?>

    <?= $form->field($model, 'publisher_id')->hiddenInput(['value' => NULL])->label(false, ['style' => 'display:none']) ?>
    <!-- <?= $form->field($model, 'economic_activities_id')->textInput() ?>-->


    <?= $form->field($model, 'project_manager')->textarea(['rows' => 3])->hint('Введіть дані про керівника проекту. Наприклад: Шевченко А.Р., нач. РННВЦ «Фірма».') ?>
    
    <?= $form->field($model, 'project_contacts')->textarea(['rows' => 3])->hint('Введіть загальні контакні дані: адреса, индекс, пошта, тощо') ?>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">    
                <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <?= $form->field($model, 'web_site')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

    </div>
    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_goal')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'project_aspects')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'project_beneficaries')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'project_cost')->textInput() ?>

    <?= $form->field($model, 'project_duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_stage')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'available_funding')->textarea(['rows' => 3]) ?>

    <?=
    $form->field($model, 'economic_activities_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(common\models\EconomicActivities::find()->all(), 'id', 'name'),
        'language' => 'ru',
        'options' => ['placeholder' => 'Оберіть'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])
    ?>
    <?= $form->field($model, 'other')->textarea(['rows' => 3]) ?>

    <!--<?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>-->
    <?=
    $form->field($model, 'logo')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            //'uploadUrl' => Url::to(['../web/img/']),
            'showUpload' => true,
        ],
    ])
    ?>

    <?= $form->field($model, 'project_files')->textInput(['maxlength' => true]) ?>

    <!--<?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'date_publish')->textInput() ?>-->
    <?=
    $form->field($model, 'date_create')->widget(DatePicker::classname(), [
        'options' => ['value' => date('Y-m-d')],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]);
    ?>






    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Подати' : 'Оновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>