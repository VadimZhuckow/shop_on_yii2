<?php

namespace app\models;

use Yii;

class Order 
{
    public array $orderlist = [];
    public int $summ=0;
    public  $list = '';
    
    public function Get()
    
    {
        $cart = $_SESSION['cart'];
       
        
        foreach($cart as $items)
        {
            $this->orderlist[] = $items['title'];
            $this->summ += $items['price'];
        }
  
        echo $this->summ;
        echo "<br>";
        $this->list = serialize($this->orderlist);
        echo "<br>";
        
    }
    
    public function Add()
    {   
      
    }
}
