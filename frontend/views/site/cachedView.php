<?php

use frontend\models\User;

if($this->beginCache('cachedView')): ?>
    <?php foreach($model as $model): ?>
        <?= $model->id; ?>
        <?= $model->username; ?>
        <?= $model->email; ?>
        <br><br>
    <?php endforeach; ?>
    <?php $this->endCache(); ?>
<?php endif; ?>
<?= "Count:".User::find()->count();  ?>