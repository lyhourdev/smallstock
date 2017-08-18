<?php

namespace App\Helpers;


use App\Models\ItemDetailOption;

class DataDetailOptionR
{

    var $items = [];
    var $total_qty = 0;
    var $total_amount = 0;

    function __construct($items,  $total_qty ,  $total_amount)
    {
        $this->items = $items;
        $this->total_amount = $total_amount;
        $this->total_qty = $total_qty;
    }
}