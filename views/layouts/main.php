<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <div class="navbar">
        <div class="navbar-left">
            <ul class="links">
                <li><a href="" class="" id="">Контакты</a></li>
                <li><a href="" class="" id="">Сервера</a></li>
                <li><a href="" class="" id="">Дополнения</a></li>
            </ul>
        </div>

        <a href="#" class="navbar-logo flex justify-center align-center logo" id=""><img src="img/logo.png" alt="" class="logo_img"></a>

        <div class="navbar-right flex justify-center align-center">
            <a href="" class="stylized-button" id="">Получить</a>
        </div>

        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</header>


<?php if (!empty($this->params['breadcrumbs'])): ?>
    <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
<?php endif ?>
<?= Alert::widget() ?>
<?= $content ?>
    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
