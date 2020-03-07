<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Books */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="books-view">

    <h1><?= Html::encode($this->title) ?> Books </h1>




    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'author',
            'datepublished',
            'numberofpages',
            'typeofbook',
        ],
    ]) ?>

</div>
<div style="text-align: right;"><?= Html::a('Back', ['kembali'], ['class' => 'btn btn-danger']) ?></div>
