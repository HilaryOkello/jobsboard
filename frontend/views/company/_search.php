<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CompanySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'company_name') ?>

    <?= $form->field($model, 'company_description') ?>

    <?= $form->field($model, 'industry_id') ?>

    <?= $form->field($model, 'establishment_date') ?>

    <?php // echo $form->field($model, 'company_website_url') ?>

    <?php // echo $form->field($model, 'company_logo') ?>

    <?php // echo $form->field($model, 'company_banner') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
