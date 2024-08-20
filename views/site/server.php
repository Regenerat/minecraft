<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

?>

<div class="site-server">
    <div class="server_title">
        <h1>Сервера BBIBISHCRAFT</h1>
    </div>
    <div class="flex align-center justify-normal mx-auto container mt-2">
        <div class="flex align-center mw-850 mx-auto border_green px-4 py-4">
            <?= Html::img('@web/img/icons/server-ico.png', ['alt' => 'Сервер', 'class' => 'server_ico']) ?>   
            <div class="server_info flex justify-sb">
                <div class="flex justify-sb">
                    <div class="server_info_title">
                        <h2>FreshCraft - Summer</h2>
                        <p>Приватный сервер #1</p>
                    </div>
                    <a href="" class="button fit-content scale">Подробнее</a>
                </div>
                <p class="">Сервер с лучшими модами. Уникальное сочетание упрощённого Роле-плей с элементами Анархии. Особенное комьюнити, необычная и чарующая атмосфера, отсутствие лишнего, доната и привата. Это не просто сервер, это новый взгляд на игру! Вместо авто-ферм, занимайтесь добыванием ресурсов, лутайте данжи и отбивайтесь от мобов!</p>
                <p class="">Самая актуальная версия игры!</p>
                <p class="">Более 200 модов!</p>
            </div>
        </div>
    </div>
</div>