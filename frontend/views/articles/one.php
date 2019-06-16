<?php

use yii\helpers\Html;

/**
 * Created by PhpStorm.
 * User: Елена
 * Date: 08.06.2019
 * Time: 13:46
 */
?>

<div class="row">
    <h2><?= $article->title ?></h2>
    <p><?= $article->text ?></p>
    <p><?= $article->date ?></p>
    <p><?= Html::a('Назад', 'index', ['class' => "btn btn-default"]) ?></p>
</div>
