<?php
namespace  app\controllers;

use app\models\Cart;
use app\models\db\Products;
use yii\web\Controller;

class CartController extends Controller
{
    public $layout = false;


    public function actionIndex(){
        $this->layout = 'cart';

        return $this->render('index');
    }



    public function actionAdd()
    {
        $id = htmlspecialchars($_GET['id']);

        var_dump(Cart::add($id));
    }
        public function actionGetQty()
        {
            return Cart::getQty();
        }


        public function actionDelete()
        {
            $id = htmlspecialchars($_GET['id']);
            Cart::delete($id);
            return true;
        }

        public function actionChangeQty()
        {
            $id = htmlspecialchars($_GET['id']);
            $qty = htmlspecialchars($_GET['val']);

            Cart::changeQty($id,$qty);

            return $this->render('cart-table');
        }



   }
?>