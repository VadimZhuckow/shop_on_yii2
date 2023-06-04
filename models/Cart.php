<?php

namespace app\models;

use app\models\db\Products;
use app\models\CartModel;

class Cart extends CartModel
{

    public static function sessionStart(){
        if(!isset($_SESSION["__flash"]))
        {
            session_start();
        }
    }
    public static function add($id)
    {

        $product = Products::find()->where(['id' => $id])->one();

        if(!isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id] = [
                'title' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'qty' => 1,
            ];
        }
        else{
            $_SESSION['cart'][$id] = [
                'title' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'qty' => $_SESSION['cart'][$id]['qty'] + 1,
            ];
        }

        return true;
    }


    public static function getQty()
    {

        self::sessionStart();
        if(isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
            $result = 0;
            foreach ($cart as $cart_item){
                $result += $cart_item['qty'];
            }
            return $result;
        }
        return 0;
    }

    public static function delete($id)
    {
        unset($_SESSION['cart'][$id]);
    }

    public static function changeQty($id,$qty)
    {
    if(isset($_SESSION['cart'][$id])){
        if($qty<1){
            unset($_SESSION['cart'][$id]);
        }else{
            $_SESSION['cart'][$id]['qty'] = $qty;
        }
    }
    }

}