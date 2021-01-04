<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Applied */

$this->title = 'Update Applied: ' . $model->applied_id;
$this->params['breadcrumbs'][] = ['label' => 'Applieds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->applied_id, 'url' => ['view', 'id' => $model->applied_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="applied-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
