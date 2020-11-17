<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StoreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Склады';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a('Создать склад', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'name',
                'value'=> function($data)
                {
                  return  Html::button($data->name,['class' => 'btn-link',
                    'onclick' => 'showDevicesModal("'.Url::to(['store/modal']).'", "'.$data->name.'")']
                  );
                },
                'format' => 'raw'
              ],
            'create_date',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

    <?php
        Modal::begin([
            'header'=>'<h5>Список устройств на складе <b style="color:maroon;" id="modal-title"></b></h5>',
            'headerOptions' => [
                'style' => 'background-color: beige;'
            ],
            'options' => [
            ],
            'id'=>'modal',
            'size' => '',
        ]);
        echo "<div id='modalContent'></div>";
        Modal::end();
    ?>
    
</div>