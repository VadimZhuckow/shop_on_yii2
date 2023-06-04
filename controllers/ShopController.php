<?php

namespace app\controllers;

use app\models\db\Products;
use yii\web\Controller;

class ShopController extends Controller
{
    public function actionIndex()
    {
        $products = Products::find()->asArray()->all();

        return $this->render('index', [
            'products' => $products,
        ]);
    }

    public function actionView()
    {
        $this->layout = 'products-view';

        $id      = htmlspecialchars($_GET['id']);
        $product = Products::find()->where(['id' => $id])->one();
        return $this->render('view', [
            'product' => $product,
        ]);
    }
}
