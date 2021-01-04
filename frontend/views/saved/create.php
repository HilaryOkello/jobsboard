<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Saved */

$this->title = 'Create Saved';
$this->params['breadcrumbs'][] = ['label' => 'Saveds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saved-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
