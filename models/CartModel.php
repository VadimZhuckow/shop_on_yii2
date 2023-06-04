<?php

namespace app\models;

abstract class CartModel
{
    /**
     * @return mixed
     * Метод для добавления товара
     * Должен принимать id
     *
     */
    abstract static function add($id);

    /**
     * @return integer
     * Метод получения количества товаров в корзину
     * Возвращает целое число
     */
    abstract  static function getQty();

}