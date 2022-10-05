<?php

/* @var $this yii\web\View */

use yii\bootstrap4\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Mymart';
?>
<div class="site-index">

    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">WELCOME TO TOKO BARU</h1>
                    <p class="fs-4">Belanja lebih mudah dengan Toko Baru</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <div class="row mb-5">
                <?php $form = ActiveForm::begin([
                    'method' => 'get',
                    'action' => Url::to(['item/filter'])
                ]) ?>

                <div class="d-flex">
                    <select name="category_id" class="form-control">
                        <option selected disabled>Pilih kategori...</option>
                        <?php foreach ($itemCategory as $category) : ?>
                            <option value="<?= $category->id; ?>"><?= $category->category; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <div class="form-group ms-3">
                        <?= Html::submitButton('filter', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>

                <?php ActiveForm::end() ?>
            </div>
            <div class="row gx-lg-5">
                <?php foreach ($model as $item) : ?>
                    <div class="col-lg-6 col-xxl-4 mb-5 mt-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <?= Html::img('@web/img/' . $item->image, [
                                        'class' => 'img-thumbnail rounded mx-auto d-block mb-3 mt-5',
                                    ]) ?>
                                </div>

                                <h2 class="fs-4 fw-bold"><?= $item->name; ?></h2>
                                <p class="mb-0">Rp<?= $item->price; ?></p>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla facere est aperiam itaque cupiditate, minima reiciendis voluptates dignissimos soluta corrupti sequi ut enim tenetur consequuntur vitae iusto iure optio libero.</p>
                            </div>
                        </div>
                        <div class="card-footer p-0 d-flex flex-row">
                            <a class="btn col-md-12 btn-success" href="<?= Url::base(true) ?>/order/buy">Buy</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?= LinkPager::widget([
                    'pagination' => $pages
                ]) ?>
            </div>
        </div>
    </section>
</div>