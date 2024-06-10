<?php 

class Cart implements \Countable
{

    private $items = [];

 

    public function addItem($item, $quantity)
    {

        if(isset($this->items[$iem]))
        {
            $this->items[$item] += $quantity;
        }else{
            $this->items[$item] = $quantity;        
        }
    }

    public function count()
    {
        return array_sum($this->items);
    }

    public function getItems()
    {
        return $this->items;
    }




}