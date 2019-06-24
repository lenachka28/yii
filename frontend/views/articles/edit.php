<?php

/* @var $form ActiveForm */
/* @var $article \common\models\Articles */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<? if (Yii::$app->session->hasFlash('error')) : ?>
    <div class="alert alert-danger alert-dismissible " role="alert">
        <strong><?= Yii::$app->session->getFlash('error') ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<? endif; ?>

<? $form = ActiveForm::begin(['options' => ['id' => 'new-article-form']]); ?>
<div class="row">
    <div class="panel panel-body">
        <h3>О пользователе : </h3>
        <table class="table table-th-block">
            <tbody>
            <tr>
                <td class="active">Заголовок:</td>
                <td><?= $form->field($article, 'title')->label(''); ?></td>
            </tr>
            <tr>
                <td class="active">Текст:</td>
                <td><?= $form->field($article, 'text')->label('')->textarea(['rows' => '5']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
</div>

<? $form = ActiveForm::end(); ?>