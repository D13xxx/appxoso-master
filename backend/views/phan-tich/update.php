<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PhanTich */

$this->title = 'Update Phan Tich: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Phan Tiches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phan-tich-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
