<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $user \common\models\User */


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


<div class="body-content">
    <? $form = ActiveForm::begin(['options' => ['id' => 'new-article-form']]); ?>
    <div class="row">
        <div class="panel panel-body">
            <h3>О пользователе : </h3>
            <table class="table table-th-block">
                <tbody>
                <tr>
                    <td class="active">Логин:</td>
                    <td><?= $form->field($user, 'username')->label(''); ?></td>
                </tr>
                <tr>
                    <td class="active">Имя:</td>
                    <td><?= $form->field($user, 'name')->label(''); ?></td>
                </tr>
                <tr>
                    <td class="active">Фамилия:</td>
                    <td><?= $form->field($user, 'surname')->label(''); ?></td>
                </tr>
                <tr>
                    <td class="active">Почта:</td>
                    <td><?= $form->field($user, 'email')->label(''); ?></td>
                </tr>
                <tr>
                    <td class="active">Город:</td>
                    <td><?= $form->field($user, 'city')->label(''); ?></td>
                </tr>
                <tr>
                    <td class="active">Возраст:</td>
                    <td><?= $form->field($user, 'age')->label(''); ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>
    <? ActiveForm::end(); ?>
</div>
