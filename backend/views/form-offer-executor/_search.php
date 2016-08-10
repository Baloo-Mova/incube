<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\FormOfferExecutorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-offer-executor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'author_id') ?>

    <?= $form->field($model, 'publisher_id') ?>

    <?= $form->field($model, 'executor_firstname') ?>

    <?= $form->field($model, 'executor_secondname') ?>

    <?php // echo $form->field($model, 'date_birth') ?>

    <?php // echo $form->field($model, 'experience') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'internship') ?>

    <?php // echo $form->field($model, 'participation_projects') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'contacts') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'file_resume') ?>

    <?php // echo $form->field($model, 'date_create') ?>

    <?php // echo $form->field($model, 'date_publish') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
