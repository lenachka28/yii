<?php

use \yii\widgets\LinkPager;
use yii\helpers\Html;
use frontend\models\Articles;

/**
 * Created by PhpStorm.
 * User: Елена
 * Date: 08.06.2019
 * Time: 13:47
 */
?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Список новостей</h1>
            <p>Самые актуальные новости</p>
            <p><?=Html::a('Создать новую статью', 'create', ['class' => 'btn btn-primary btn-lg'])?></p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            foreach ($articles as $article) { ?>
                <div class="col-md-4">
                    <h2><?= $article->title ?></h2>
                    <p><?= Articles::getShortText($article->text) ?></p>
                    <p><?= Html::a( 'Детально »','one?id='.$article->id , ['class'=>'btn btn-secondary'])?></p>
                </div>
                <?php
            }
            ?>
        </div>
        <hr>
    </div>

<?php
//echo '<pre>' . print_r($pages, true) . '</pre>';
echo LinkPager::widget([
    'pagination' => $pages
]);