<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use kartik\grid\GridView;
?>
<div class="">
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'serial_number',
                'value'=> function($data)
                {
                    return  Html::a($data->serial_number,
                        [Url::toRoute(['device/index','DeviceSearch[serial_number]' => $data->serial_number])],
                        ['onclick' => 'openNewPage(this, event);']
                    );
                },
                'format' => 'raw'
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>