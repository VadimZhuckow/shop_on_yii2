<?php
namespace  app\controllers;
use app\models\Cart;
use app\models\db\Products;
use app\models\db\OrdersHistory;
use app\models\Order;
use yii\web\Controller;


class OrderController extends Controller
{   
    public $layout = false;

    public function actionGetOrder()
    {
        (new Order)->Get();
    }
    public function actionAddOrder()
        {   
            (new Order)->Add();
        }
}