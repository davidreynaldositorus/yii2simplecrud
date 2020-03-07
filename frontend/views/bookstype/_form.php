<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Bookstype */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bookstype-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'booktype')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
