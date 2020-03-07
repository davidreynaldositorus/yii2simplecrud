<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Bookstype */

$this->title = 'Create Books Type';
$this->params['breadcrumbs'][] = ['label' => 'Bookstypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bookstype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
