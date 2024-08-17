<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

$this->registerJsFile('https://code.jquery.com/jquery-3.6.0.min.js', ['position' => \yii\web\View::POS_HEAD]);
$this->registerJsFile('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', ['position' => \yii\web\View::POS_END]);


?>
<div class="site-index">

    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item brightness-50 active">
            <img src="img/home_slider/1.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item brightness-50">
        <img src="img/home_slider/5.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item brightness-50">
        <img src="img/home_slider/7.webp" class="d-block w-100" alt="...">
        </div>
    </div>
    <div class="carousel-caption">
            <h1>ДОБРО ПОЖАЛОВАТЬ НА ОФИЦИАЛЬНЫЙ САЙТ BBISHCRAFT</h1>
            <p>Уникальный проект, новое слово в тематике модпаков майнкрафт — раскрой потенциал великой игры с проектом BBISHCRAFT.
            Освежи впечатление от выживания и получи незабываемые ощущения от игрового процесса!</p>
            <a href="" class="stylized-button play_btn" id="">Играть</a>
        </div>
    </div>
</div>
