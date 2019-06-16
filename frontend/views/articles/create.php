<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<? if (Yii::$app->session->hasFlash('success')) : ?>
    <div class="alert alert-success alert-dismissible " role="alert">
        <strong><?= Yii::$app->session->getFlash('success') ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<? endif; ?>

<? if (Yii::$app->session->hasFlash('error')) : ?>
    <div class="alert alert-danger alert-dismissible " role="alert">
        <strong><?= Yii::$app->session->getFlash('error') ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<? endif; ?>


<? $form = ActiveForm::begin(['options' => ['id' => 'new-article-form']]); ?>
<?= $form->field($article, 'title') ?>
<?= $form->field($article, 'text')->textarea(['rows' => '5']); ?>
<?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
<? ActiveForm::end(); ?>
