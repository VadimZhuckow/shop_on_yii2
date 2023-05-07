<?php

namespace app\controllers;

use app\models\db\Products;
use yii\web\Controller;

class ShopController extends Controller
{
    public $layout = 'main';

    public function actionIndex(){

        $products = Products::find()->asArray()->all();

        return $this->render('index', [
            'products' => $products,
        ]);
    
    }

}