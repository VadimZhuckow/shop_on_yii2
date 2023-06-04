<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="dashboard_contents p-top-100 p-bottom-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Мои настройки</h4>
                <?php $form = ActiveForm::begin(); ?>

                <?=$form->field($model, 'email')?>

                <?=$form->field($model, 'city')?>

                <?=Html::submitButton('Сохранить', ['class' => 'btn btn-success'])?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>