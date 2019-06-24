<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="menu menu__horiz static">
            <div class="reader_article_box reader_article_box__foggy">
                <div class="figure">
                    <div class="figure_content-box">
                        <a class="figure_active-zone figure-image-js" target="_blank">
                            <div class="figure_content">
                                <img class="figure_img"
                                     src="http://static.government.ru/media/photos/656x369/41d4642cc44722ea087b.jpg"
                                     alt="Карта с указанием местоположения Приемной Правительства и ближайших станций метро">
                                <div class="figure_icon icon_zoom-in"></div>
                            </div>
                        </a>
                    </div>
                    <div class="figure_caption-box">
                        <div class="figure_caption">
                            <p class="figure_caption_title">Карта с указанием местоположения Приемной Правительства
                                и ближайших станций метро</p>
                        </div>
                    </div>
                </div>
            </div>
            <p>Приёмная Правительства Российской Федерации:</p>
            <div class="reader_article_box reader_article_box__foggy">
                <div class="figure">
                    <div class="figure_content-box">
                        <a class="figure_active-zone figure-image-js" target="_blank">
                            <div class="figure_content">
                                <img class="figure_img"
                                     src="http://static.government.ru/media/photos/656x369/41d462d219388ac26ca6.jpg"
                                     alt="Приемная Правительства Российской Федерации">
                                <div class="figure_icon icon_zoom-in"></div>
                            </div>
                        </a>
                    </div>
                    <div class="figure_caption-box">
                        <div class="figure_caption">
                            <p class="figure_caption_title">Приемная Правительства Российской Федерации</p>
                        </div>
                    </div>
                </div>
            </div>
            <p>Москва, Краснопресненская набережная, дом 2 строение 2</p>
            <p>Приёмная Правительства Российской Федерации работает ежедневно с 9 до 17 часов (в пятницу - до 16
                часов) кроме субботы, воскресенья и праздничных дней.<br><br></p>
            <p>Приём руководителями федеральных органов исполнительной власти осуществляется с 10 до 13 часов по
                предварительной записи в соответствии с ежеквартально утверждаемыми графиками.
                <br><br></p>
            <p>В дни приёма граждан руководителями федеральных органов исполнительной власти текущий приём
                уполномоченными должностными лицами Аппарата Правительства не ведётся.&nbsp;</p>
        </div>
    </div>
