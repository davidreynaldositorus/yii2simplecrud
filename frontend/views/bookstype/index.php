<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BookstypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books Types';
?>
<div class="bookstype-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bookstype', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
              'header' => 'Number',
              'contentOptions' => ['style'=>'text-align: center;'],
            ],
            [
                'header' => 'Book Type',
                'attribute' => 'booktype',
                'contentOptions' => ['style'=>'text-align: center;'],
                //'format' => ['decimal', 2],
            ],
        ],
    ]); ?>


</div>
