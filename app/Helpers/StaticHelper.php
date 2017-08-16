<?php
/**
 * Created by PhpStorm.
 * User: lyhourleap
 * Date: 11/7/17
 * Time: 9:08 AM
 */
namespace App\Helpers;
use App\Models\ItemDetailOption;

class StaticHelper
{
    static function abc(){
        return 'sadasdsd';
    }

    static function getDataDetailOption($data,$ref_id = 0, $ref_type = '')
    {
        $items = [];
        $total_qty = 0;
        $total_amount = 0;

        if($data == null){ return null ;}

        if(count($data)>0)
        {
            foreach ($data as $row){
                //dd($row['qty']);

                $item_id = isset($row['item_id'])?$row['item_id']: 0;
                $unit = isset($row['unit'])?$row['unit']: '';
                $qty = isset($row['qty'])?$row['qty']: 0;
                $price = isset($row['price'])?$row['price']: 0;
                $discount = isset($row['discount'])?$row['discount']: 0;
                $_option = isset($row['option'])?$row['option']: [];
//                $item_id > 0 &&
                if( $qty > 0) {
                    $option = [];
                    if(count($_option)>0)
                    {
                        $_price = 0;
                        foreach ($_option as $row2)
                        {
                            $item_id2 = isset($row2['item_id'])?$row2['item_id']: 0;
                            $unit2 = isset($row2['unit'])?$row2['unit']: '';
                            $qty2 = isset($row2['qty'])?$row2['qty']: 0;
                            $price2 = isset($row2['price'])?$row2['price']: 0;
                            $discount2 = isset($row2['discount'])?$row2['discount']: 0;
                            $amount2 = $qty2*$price2-$discount2;

                            $_price += $amount2;

                            if($item_id2 > 0 && $qty2 > 0) {
                                $option[] = [
                                   'item_id' => $item_id2 ,
                                   'unit' =>  $unit2 ,
                                   'qty' => $qty2,
                                   'price' => $price2 ,
                                   'discount' => $discount2,
                                   'amount' => $amount2
                                ];
                            }

                        }

                        if($_price>0 && $qty > 0)
                        {
                            $price = $_price / $qty;
                        }
                    }

                    $item = new ItemDetailOption($item_id ,$unit ,$qty, $price ,$discount ,$option,$ref_id,$ref_type);


                    $items[] = $item;
                    $total_qty += $qty;
                    $total_amount += $item->amount;

                }

                //dd($items);

            }

        }

        //return ['items' => $items, 'total_qty' => $total_qty , 'total_amount' => $total_amount];
        return new DataDetailOptionR($items,$total_qty,$total_amount);

    }
}