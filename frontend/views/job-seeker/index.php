<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JobSeekerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Job Seekers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-seeker-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Job Seeker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'profile_image',
            'resume',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
