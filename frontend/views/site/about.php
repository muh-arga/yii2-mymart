<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-5 d-flex flex-column align-items-center">
                    <h1 class="display-5 fw-bold"><?= Html::encode($this->title) ?></h1>
                    <p class="fs-4">This is the About page. You may modify the following file to customize its content:</p>
                    <a class="btn col-md-3 btn-primary btn-lg" href="#!">Call to action</a>
                    <code><?= __FILE__ ?></code>
                </div>
            </div>
        </div>
    </header>
</div>