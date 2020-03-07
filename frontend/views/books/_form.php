<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Bookstype;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datepublished')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Enter Date Published ...'],
        'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
        ]
      ]);
    ?>

    <?= $form->field($model, 'numberofpages')->textInput() ?>

    <?= $form->field($model,'typeofbook')->dropdownlist(ArrayHelper::map(Bookstype::find()->all(), 'idtype', 'booktype')); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
