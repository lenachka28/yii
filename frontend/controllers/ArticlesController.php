<?php
/**
 * Created by PhpStorm.
 * User: Елена
 * Date: 08.06.2019
 * Time: 12:14
 */

namespace frontend\controllers;

use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use frontend\models\Articles;
use Yii;

class ArticlesController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['create'],
                        'roles' => ['@'],
                    ]
                ],
            ],
        ];
    }

    public function actionIndex()
    {

        $query = Articles::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
        $articles = $query->offset($pages->offset)
            ->limit(3)//$pages->limit
            ->all();

        return $this->render('articles', compact('articles', 'pages'));
    }

    public function actionOne()
    {
        if (Yii::$app->request->get()['id'] !== null) {
            $article = Articles::find()->where(['id' => Yii::$app->request->get()['id']])->one();
            if (!empty($article))
                return $this->render('one', compact('article'));
        }
        return $this->render('error');
    }

    public function actionCreate()
    {
        $article = new Articles;

        if ($article->load(Yii::$app->request->post())) {

            $article->setAttribute('date', date('Y-m-d'));

            if ($article->save()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            } else {
                echo '<pre>' . print_r($article->errors, true) . '</pre>';
                Yii::$app->session->setFlash('error', 'Ошибка сохранения!');
            }
        }
        return $this->render('create', compact('article'));
    }
}