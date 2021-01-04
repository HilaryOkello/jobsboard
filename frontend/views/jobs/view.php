<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jobs */

$this->title = $model->job_id;
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jobs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->job_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->job_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'job_id',
            'id',
            'job_title',
            'industry_id',
            'location_id',
            'currency',
            'min_salary',
            'max_salary',
            'created_at',
            'deadline',
            'category_id',
            'min_experience',
            'max_experience',
            'job_description:ntext',
            'requirements:ntext',
            'benefits:ntext',
            'how_to_apply:ntext',
            'status',
        ],
    ]) ?>

</div>
