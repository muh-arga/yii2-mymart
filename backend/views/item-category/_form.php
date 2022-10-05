<?php

/**
* This template is edited by Muh. Arga Swara Iskandar.
*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ItemCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_category')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
