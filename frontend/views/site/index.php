<?php

/* @var $this yii\web\View */

$this->title = 'Главная';
?>
<div class="container">
    <div class="owl-carousel owl-theme">
        <div><img src="/frontend/web/upload/carousel1.jpg" alt="img"></div>
        <div><img src="/frontend/web/upload/carousel2.jpg" alt="img"></div>
        <div><img src="/frontend/web/upload/carousel3.jpg" alt="img"></div>
        <div><img src="/frontend/web/upload/carousel4.jpg" alt="img"></div>
        <div><img src="/frontend/web/upload/carousel5.jpg" alt="img"></div>
        <div><img src="/frontend/web/upload/carousel6.jpg" alt="img"></div>
        <div><img src="/frontend/web/upload/carousel7.jpg" alt="img"></div>
        <div><img src="/frontend/web/upload/carousel9.jpg" alt="img"></div>
        <div><img src="/frontend/web/upload/carousel11.jpg" alt="img"></div>
        <div><img src="/frontend/web/upload/carousel12.jpg" alt="img"></div>
        <div><img src="/frontend/web/upload/carousel13.jpg" alt="img"></div>
    </div>
</div>
<div class="site-index">
    <div class="jumbotron">
        <h1>Привет, это мой Блог!)</h1>

        <p class="lead">Хорошего дня <?= '😉' ?></p>
    </div>
    <div class="body-content">
        <div class="row">
        </div>
    </div>
</div>

<?

$script = <<< JS
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            nav: true,
            margin: 10,
            center: true,
            loop: true,
            autoplay: true,
            autoplayTimeout:2000,
        });
    });
JS;
$this->registerJs($script, yii\web\View::POS_END);
?>