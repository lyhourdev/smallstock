<?php
/**
 * Created by PhpStorm.
 * User: lyhourleap
 * Date: 11/7/17
 * Time: 9:08 AM
 */
namespace App\Helpers;
use App\Models\Item;
use App\Models\ItemDetailOption;

class StaticHelper
{
    static function getR(){
        return rand(11111, 99999) . time() . rand(1000, 5000);
    }
    static function getDataDetailOption($data,$ref_id = 0, $ref_type = '',$id__ = 0)
    {

        $items = [];
        $total_qty = 0;
        $total_amount = 0;
        if($data == null){ return null ;}
        if(count($data)>0)
        {
            foreach ($data as $row){
//                dd($row['qty']);
                $open_detail_id_ = isset($row['open_detail_id_'])?$row['open_detail_id_']: 0;
                $iidd = isset($row['id'])?$row['id']: 0;
                $item_code = isset($row['item_code'])?$row['item_code']: 0;
                $title = isset($row['item_title'])?$row['item_title']: '';
                $unit = isset($row['unit'])?$row['unit']: '';
                $qty = isset($row['qty'])?$row['qty']: 0;
                $price = isset($row['price'])?$row['price']: 0;
                $discount = isset($row['discount'])?$row['discount']: 0;
                $note = isset($row['note'])?$row['note']: '';
                $_option = isset($row['option'])?$row['option']: [];
//                $item_code > 0 &&
//                dd($_option);

                if( $qty > 0) {
                    $option = [];
                    if(count($_option)>0)
                    {
                        $_price = 0;
                        foreach ($_option as $row2)
                        {
//                            dd($row2);
                            $open_detail_id_2 = isset($row['open_detail_id_'])?$row['open_detail_id_']: 0;
                            $iidd2 = isset($row['id'])?$row['id']: 0;
                            $item_code2 = isset($row2['item_code'])?$row2['item_code']: 0;
                            $title2 = isset($row['item_title'])?$row['item_title']: '';
                            $unit2 = isset($row2['unit'])?$row2['unit']: '';
                            $qty2 = isset($row2['qty'])?$row2['qty']: 0;
                            $price2 = isset($row2['price'])?$row2['price']: 0;
                            $discount2 = isset($row2['discount'])?$row2['discount']: 0;
                            $amount2 = $qty2*$price2-$discount2;
                            $_price += $amount2;
                            if($item_code2 !='' && $qty2 > 0) {
                                $option[] = [
                                   'open_detail_id_2' => $open_detail_id_2 ,
                                   'iidd2' => $iidd2 ,
                                   'item_code' => $item_code2 ,
                                   'title' => $title2 ,
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
//dd($option);

                    $item = new ItemDetailOption($item_code ,$title ,$unit, $qty ,$price ,$discount,$option,$ref_id,$ref_type,$note,'',$id__,$iidd,$open_detail_id_);


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

    static function getItemTitle($id){
        return Item::select('id','item_code','title','unit')->find($id);
    }

}