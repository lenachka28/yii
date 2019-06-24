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
use common\models\Articles;
use Yii;

class ArticlesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['create', ' edit'],
                        'roles' => ['@'],
                    ]
                ],
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $query = Articles::find();

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
        $articles = $query->offset($pages->offset)
            ->limit(3)//$pages->limit
            ->all();

        return $this->render('articles', compact('articles', 'pages'));
    }

    /**
     * Displays detail information of one article
     *
     * @return string
     */
    public function actionOne()
    {
        $id = Yii::$app->request->get()['id'];
        if ($id !== null) {
            $article = Articles::find()->where(['id' => $id])->one();
            if (!empty($article))
                return $this->render('one', compact('article'));
        }
        return $this->render('error');
    }

    /**
     * Page of edit article
     *
     * @return string
     */
    public function actionEdit()
    {
        $id = Yii::$app->request->get()['id'];
        if ($id !== null) {
            $article = Articles::find()->where(['id' => $id])->one();
            if ($article->load(Yii::$app->request->post()) && $article->validate()) {

                if ($article->save()) {
                    Yii::$app->session->setFlash('success', 'Данные приняты');
                    return $this->refresh();
                } else {
                    echo '<pre>' . print_r($article->errors, true) . '</pre>';
                    Yii::$app->session->setFlash('error', 'Ошибка сохранения!');
                }
            }
            if (!empty($article))
                return $this->render('edit', compact('article'));
        }
        return $this->render('error');
    }

    /**
     * Search into title of articles
     *
     * @return string
     */
    public function actionSearch()
    {
        $q = Yii::$app->request->get()['q'];
        if ($q !== null) {
            $query = Articles::find()->where(['like', 'title', $q]);
            $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
            $articles = $query->offset($pages->offset)
                ->limit(3)
                ->all();

            return $this->render('articles', compact('articles', 'pages'));
        }
        return $this->render('error');
    }

    /**
     * Create new article
     *
     * @return string
     */
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