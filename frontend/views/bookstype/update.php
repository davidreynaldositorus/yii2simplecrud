<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Bookstype */

$this->title = 'Update Bookstype: ' . $model->idtype;
$this->params['breadcrumbs'][] = ['label' => 'Bookstypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtype, 'url' => ['view', 'id' => $model->idtype]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bookstype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
