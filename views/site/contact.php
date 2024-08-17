<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

?>
<div class="site-contact">
    <div class="contact">
        <h1>Контакты</h1>
        <p>Все полезные ссылки на источники информации: тех-поддержка,
        новости, сообщества и каналы</p>
    </div>
    <div class="container">
        <div class="card">
            <div class="icon"><?= Html::img('@web/img/icons/telegram-px.svg', ['alt' => 'Логотип', 'class' => 'icon_img']) ?></div>
            
            <p>Хотите получать новости в телеграмме? Подписывайтесь и всегда будьте в курсе событий!</p>
            <a href="https://t.me/bbishcrxft" class="button" target="_blank">TELEGRAM</a>
        </div>
        <div class="card">
            <div class="icon"><?= Html::img('@web/img/icons/boosty-px.svg', ['alt' => 'Логотип', 'class' => 'icon_img']) ?></div>
            
            <p>Получайте эксклюзивный контент и поддерживайте творчество автора!</p>
            <a href="https://boosty.to/bbishka" class="button" target="_blank">BOOSTY</a>
        </div>
        <div class="card">
            <div class="icon"><?= Html::img('@web/img/icons/youtube-px.svg', ['alt' => 'Логотип', 'class' => 'icon_img']) ?></div>
            
            <p>Обзоры модов и сборки от создателя FreshCraft. Основной канал на Ютуб - Grape Create!</p>
            <a href="#" class="button" target="_blank">YOUTUBE</a>
        </div>
        <div class="card">
            <div class="icon"><?= Html::img('@web/img/icons/discord-px.svg', ['alt' => 'Логотип', 'class' => 'icon_img']) ?></div>
            
            <p>Тех-Поддержка, общение, новости! Присоединяйтесь к нашему Дискорд сообществу.</p>
            <a href="https://discord.gg/jUEMKXV9Wy" class="button" target="_blank">DISCORD</a>
        </div>
    </div>
</div>
