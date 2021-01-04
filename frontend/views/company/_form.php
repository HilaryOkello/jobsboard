<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Company */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'industry_id')->textInput() ?>

    <?= $form->field($model, 'establishment_date')->textInput() ?>

    <?= $form->field($model, 'company_website_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_banner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
