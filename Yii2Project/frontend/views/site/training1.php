<?php
use yii\helpers\Html;
?>

<div class="site-treaning1">
    <h3><?= Html::a('Назад',['site/index']) ?></h3>
    <h2>Эффекты jQuery</h2>
    <button onclick="tr1_addEffect1()">Эффект Show</button>
    <button onclick="tr1_addEffect2()">Эффект SlideDown</button>
    <button onclick="tr1_addEffect3()">Эффект Animate</button><br>
    <div id="kv1">1</div>
    <div id="kv2">2</div>
    <div id="kv3">3</div>
</div>