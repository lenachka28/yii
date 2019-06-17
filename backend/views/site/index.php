<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Profile';

?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Привет <?= $user['username'] ?>!</h1>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="panel panel-body">
                <h3>О пользователе : </h3>
                <table class="table table-th-block">
                    <tbody>
                    <tr>
                        <td class="active">Логин:</td>
                        <td><?= $user->username ?></td>
                    </tr>
                    <tr>
                        <td class="active">Имя:</td>
                        <td><?= $user->name ?></td>
                    </tr>
                    <tr>
                        <td class="active">Фамилия:</td>
                        <td><?= $user->surname ?></td>
                    </tr>
                    <tr>
                        <td class="active">Почта:</td>
                        <td><?= $user->email ?></td>
                    </tr>
                    <tr>
                        <td class="active">Город:</td>
                        <td><?= $user->city ?></td>
                    </tr>
                    <tr>
                        <td class="active">Возраст:</td>
                        <td><?= $user->age ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <?php
            echo Html::a('Редактировать', [ 'site/edit-profile'], ['class' => 'btn btn-lg btn-primary']);
            ?>
        </div>
    </div>
</div>
