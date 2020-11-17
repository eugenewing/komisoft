<?php
use yii\helpers\Html;
?>

<div class="site-treaning2">
    <h3><?= Html::a('Назад',['site/index']) ?></h3>
    <h2>Селекторы jQuery</h2>
    <div id="st1"><p>Текст первого абзаца</p></div>
    <div id="st2"><p class="withBorder">Текст второго абзаца</p></div>
    <div id="st3"><p>Текст третьего абзаца</p></div>
    <div style="clear: both"></div>
    <button onclick="tr2_addStyle1()" id="b1">Сделать 1 блок красным</button><br><br>
    <button onclick="tr2_addStyle2()" id="b2">Обвести текст 2 блока синей рамкой</button><br><br>
    <button onclick="tr2_addStyle3()" id="b3">Сделать шрифт в 1 и 3 блоках жирным</button>
</div>