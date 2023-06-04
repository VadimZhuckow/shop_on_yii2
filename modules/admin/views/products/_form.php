<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-3">
            <?=$form->field($model, 'name')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'price')->input('number')?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'views')->textInput()?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'image')->fileInput()?>
        </div>
    </div>

    <?=$form->field($model, 'rating')?>

    <?=$form->field($model, 'description')->textarea(['rows' => 6])?>

    <div class="form-group">
        <?=Html::submitButton('Сохранить', ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
