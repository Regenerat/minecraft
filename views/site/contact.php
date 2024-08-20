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
            
            <p>Хотите получать <br>новости в телеграмме? <br>Подписывайтесь и <br>всегда будьте в курсе <br>событий!</p>
            <a href="https://t.me/bbishcrxft" class="button" target="_blank">TELEGRAM</a>
        </div>
        <div class="card">
            <div class="icon"><?= Html::img('@web/img/icons/boosty-px.svg', ['alt' => 'Логотип', 'class' => 'icon_img']) ?></div>
            
            <p>Получайте <br>эксклюзивный контент <br>и поддерживайте <br>творчество автора!</p>
            <a href="https://boosty.to/bbishka" class="button" target="_blank">BOOSTY</a>
        </div>
        <div class="card">
            <div class="icon"><?= Html::img('@web/img/icons/youtube-px.svg', ['alt' => 'Логотип', 'class' => 'icon_img']) ?></div>
            
            <p>Обзоры модов и сборки <br>от создателя <br>BBIBISHCRAFT.<br>Основной канал на <br>Ютуб - BBIBISHCRAFT!</p>
            <a href="#" class="button" target="_blank">YOUTUBE</a>
        </div>
        <div class="card">
            <div class="icon"><?= Html::img('@web/img/icons/discord-px.svg', ['alt' => 'Логотип', 'class' => 'icon_img']) ?></div>
            
            <p>Тех-Поддержка, <br>общение, новости! <br>Присоединяйтесь к <br>нашему Дискорд <br>сообществу.</p>
            <a href="https://discord.gg/8fyfDdnRGZ" class="button" target="_blank">DISCORD</a>
        </div>
        <div class="card">
            <div class="icon"><?= Html::img('@web/img/icons/vk-px.svg', ['alt' => 'Логотип', 'class' => 'icon_img']) ?></div>
            
            <p>Пользуйтесь ВКонтакте? <br>У создателя проекта так <br>же есть группа с <br>новостями и не только!</p>
            <a href="https://vk.com/xnbodev" class="button" target="_blank">DISCORD</a>
        </div>
    </div>
</div>
