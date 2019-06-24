<?php

/* @var $article \common\models\Articles */

use yii\helpers\Html;

?>

<div class="row">
    <h2><?= $article->title ?></h2>
    <p><?= $article->text ?></p>
    <p><?= $article->date ?></p>
    <p>
        <?= Html::a('Список новостей', ['articles/index'], ['class' => 'btn btn-primary', 'type' => 'button']) ?>
        <?= Html::a('Редактировать', ['articles/edit', 'id' => $article->id], ['class' => 'btn btn-warning', 'type' => 'button']) ?>
    </p>
</div>
