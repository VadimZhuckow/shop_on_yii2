<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Posts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4"> <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?></div>

        <div class="col-md-4"><?= $form->field($model, 'datatime')->textInput() ?></div>
        <div class="col-md-4"> <?= $form->field($model, 'views')->textInput() ?></div>
        <div class="col-md-4"> <?= $form->field($model, 'likes')->textInput() ?></div>
        <div class="col-md-4"><?= $form->field($model, 'image')->fileInput()?></div>
        <div class="col-md-12"><?= $form->field($model, 'content')->textarea(['rows' => 6, 'id'=>'tiny']) ?></div>



    </div>













    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
