<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Store;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DeviceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Devices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="device-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Device', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'serial_number',
            //'store_id',
            [
                'attribute' => 'store_id',
                //'value' => function($model) {return empty($model->store) ? null : $model->store;},
                'filter' => ArrayHelper::map(Store::find()->asArray()->all(), 'id', 'name'),
                'filterType' => GridView::FILTER_SELECT2,
                'filterWidgetOptions' => [
                  'options' => ['prompt' => ''],
                  'pluginOptions' => ['allowClear' => true],
                  'theme' => 'bootstrap',
                ],
            ],
            'create_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
