<?php

use yii\bootstrap4\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Mymart';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">WELCOME TO TOKO BARU</h1>

        <p class="lead">Belanja lebih mudah dengan Toko Baru</p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <div class="body-content">

        <div class="row">
            <?php $form = ActiveForm::begin([
                'method' => 'get',
                'action' => Url::to(['item/filter'])
            ]) ?>
            
            <div class="d-flex">
                <select name="category_id" class="form-control">
                    <option selected disabled>Pilih kategori...</option>
                    <?php foreach($itemCategory as $category): ?>
                        <option value="<?= $category->id; ?>" <?= ($category->id == Yii::$app->request->get('category_id')) ? 'selected' : ''; ?>  ><?= $category->category; ?></option>
                    <?php endforeach; ?>
                </select>

                <div class="form-group ml-3">
                    <?= Html::submitButton('filter', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>

            <?php ActiveForm::end() ?>
        </div>

        <div class="row">
            <?php foreach($model as $item): ?>
            <div class="col-lg-4">
                <div class="col">
                    <?= Html::img('@web/img/' . $item->image, ['class' => 'img-thumbnail rounded mx-auto d-block mb-3 mt-5', 
                    'style' => 'width: 700px; height: 300px;']) ?>
                </div>
                
                <h2><?= $item->name; ?></h2>

                <p style="color: grey;">Rp.<?= number_format($item->price); ?></p>

                <p><a class="btn btn-success" href="order/buy">Buy</a></p>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
