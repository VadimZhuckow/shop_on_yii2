<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Posts */

$this->title = 'Добавление';
$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
