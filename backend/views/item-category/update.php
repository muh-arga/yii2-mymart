<?php

/**
* This template is edited by Muh. Arga Swara Iskandar.
*/

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ItemCategory */

$this->title = 'Update Item Category: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Item Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
