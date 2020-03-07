<?php

use yii\helpers\Html;
use yii\grid\GridView;
use models\Bookstype;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
?>
<div class="books-index">
  <div class="jumbotron">
      <h1>Welcome to Books Manajer</h1>
      <p class="lead">You can create, update and delete the books all the time !</p>
  </div>

    <p style="margin-top: 50px">
        <?= Html::a('Create New Books', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <br>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
              'header' => 'Number',
              'contentOptions' => ['style'=>'text-align: center;'],
            ],

            //'id',
            [
                'header' => 'Title of Book',
                'attribute' => 'title',
                'contentOptions' => ['style'=>'text-align: center;'],
                //'format' => ['decimal', 2],
            ],
            [
                'header' => 'Author of Book',
                'attribute' => 'author',
                'contentOptions' => ['style'=>'text-align: center;'],
                //'format' => ['decimal', 2],
            ],
            [
                'header' => 'Date Published',
                'attribute' => 'datepublished',
                'contentOptions' => ['style'=>'text-align: center;'],
                //'format' => ['decimal', 2],
            ],
            [
                'header' => 'Number of Pages',
                'attribute' => 'numberofpages',
                'contentOptions' => ['style'=>'text-align: center;'],
                //'format' => ['decimal', 2],
            ],
            [
                'header' => 'Type of Book',
                'value' => 'bookstype.booktype',
                'contentOptions' => ['style'=>'text-align: center;'],
                //'format' => ['decimal', 2],
            ],

            ['class' => 'yii\grid\ActionColumn',
              'header' => 'Action ',
              'contentOptions' => ['style'=>'text-align: center;'],
            ],
        ],
    ]); ?>


</div>
