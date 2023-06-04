<?php

namespace app\controllers;

use app\models\db\Products;
use yii\web\Controller;

class TestController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {
        $i   = 0;
        $max = 100;

        while ($i < $max) {
            $product              = new Products;
            $product->name        = "Тестовый товар #{$i}";
            $product->image       = 'https://tehnoteca.ru/img/1693/1692695/acer_nitro_7_an715_51_an715_51_78cl_3.jpg';
            $product->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam cum delectus, esse eveniet nihil quaerat quidem rerum tempora veniam voluptatem! Cupiditate ducimus facilis fugiat harum modi officia praesentium ratione vel?';
            $product->price       = rand(1000, 9999);
            $product->views       = rand(50, 500);
            $product->rating      = rand(50, 500);
            $product->save();

            $i++;
        }
    }
}
