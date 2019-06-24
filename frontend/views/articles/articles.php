<?php

/* @var $articles \yii\db\ActiveRecord[] the query results of Articles */

use \yii\widgets\LinkPager;
use yii\helpers\Html;
use common\models\Articles;
?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Список новостей</h1>
            <p>Самые актуальные новости</p>
            <p><?= Html::a('Создать новую статью', ['articles/create'], ['class' => 'btn btn-primary btn-lg']) ?></p>
        </div>

        <div class="search_box">
            <form class="form-inline" id="search" method="get"
                  action="<?= \yii\helpers\Url::to(["articles/search"]) ?>">
                <input class="form-control" type="text" placeholder="Поиск" name="q"
                       value="<?= Yii::$app->request->get()['id'] ?>">
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($articles as $article) : ?>
                <div class="col-md-4">
                    <h2><?= $article->title ?></h2>
                    <p><?= Articles::getShortText($article->text) ?></p>
                    <p><?= Html::a('Детально »', ['articles/one', 'id' => $article->id], ['class' => 'btn btn-secondary']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <hr>
    </div>

<?= LinkPager::widget([
    'pagination' => $pages
]);