<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemDetailOption
{
    var $item_code = 0;
    var $item_id = 0;
    var $unit = '';
    var $qty = 0;
    var $price = 0;
    var $discount = 0;
    var $amount = 0;
    var $option = [];
    var $ref_id = 0;
    var $ref_type = '';
    var $note = '';
    var $title = '';
    var $open_id = 0;
    var $iidd = 0;//item id
    var $open_detail_id_ = 0; //open item detail id
    function __construct($item_code = 0,$title = '', $unit = '' ,$qty = 0,$price = 0,$discount = 0,$option = [],$ref_id = 0,$ref_type = '',$note = '',$item_id = 0,$open_id = 0,$iidd = 0,$open_detail_id_ = 0)
    {
        $this->iidd = $iidd;
        $this->item_code = $item_code;
        $this->item_id = $item_id;
        $this->unit = $unit;
        $this->qty = $qty;
        $this->price = $price;
        $this->discount = $discount;
        $this->amount = $qty*$price - $discount;
        $this->option = $option;
        $this->ref_id = $ref_id;
        $this->ref_type = $ref_type;
        $this->note = $note;
        $this->title = $title;
        $this->open_id = $open_id;
        $this->open_detail_id_ = $open_detail_id_;
        $this->insertItem();
        $this->init();

    }
    private function init()
    {
//        dd($this->ref_type);

        if($this->ref_type == 'open')
        {
            $this->insertOpenItemDetail();
        }
        if($this->ref_type == 'purchase')
        {
            $this->insertPurchaseDetail();
        }
        if($this->ref_type == 'production')
        {
            $this->insertProductionDetail();
        }
        if($this->ref_id == 'invoice')
        {
            $this->insertInvoiceDetail();
        }
    }
    private function insertItem()
    {
        if ($this->open_id > 0){
            $m =Item::find($this->iidd);
//            dd($this->item_code);
//            dd($m);

        }else{
            if($this->item_code > 0)
            {
                return Item::find($this->item_code);
            }else {
                $m = new Item();
            }
        }



        $m->ref_id = $this->ref_id;
        $m->ref_type = $this->ref_type;
        $m->item_code = $this->item_code;
        $m->unit = $this->unit;
        $m->title = $this->title;
        $m->description =$this->note;

        if ($m->save()) {
           return $this->item_id = $m->id;
        } else {
            return null;
        }
    }
    private function insertOpenItemDetail()
    {
        if($this->open_id > 0){
            $m = OpenItemsDetail::find($this->open_detail_id_);
        }else{
            $m = new OpenItemsDetail();

        }
        $m->open_id = $this->ref_id;
        $m->item_id = $this->item_id;
        $m->item_code = $this->item_code;
        $m->qty = $this->qty;
        $m->cost = $this->price;
        $m->note = $this->note;
        $m->item_detail = json_encode($this->option);
        if($m->save())
        {
            $item = $this->insertItemTran();
            if (json_decode($m->item_detail) > 0){
                foreach (json_decode($m->item_detail) as $row){
//                    dd($row);
                    $iitem = Item::where('item_code',$row->item_code)->first();
                    if ($this->open_id > 0){
                        $ii = ItemDetail::where('ref_type',$this->ref_type)->where('ref_id',$this->ref_id)->where('item_id','');

                    }else{
                        $ii = new ItemDetail();

                    }


//                    $item_iid = 0;

                    if (count($iitem) >0){
                        $ii->ref_id = $this->ref_id;
                        $ii->ref_type = $this->ref_type;
                        $ii->item_id = $iitem->id;
                        $ii->item_code = $this->item_code;
                        $ii->qty = $row->qty;
                        $ii->note = $item->node;

                        $ii->save();
                    }else{
                        $this->item_code = $row->item_code;
                        $this->title = $row->title;
//                        $this->note = $row->note;
//                        $item_iid = $this->insertItem();
                        $this->unit = $row->unit;
                        $this->qty = $row->qty;
                        $this->price = $row->price;
//                        $this->ref_id = $item_iid;
//                        $this->insertItemTran();

                        $ii->ref_id = $this->ref_id;
                        $ii->ref_type = $this->ref_type;
                        $ii->item_id = $this->insertItem();
                        $ii->item_code = $this->item_code;
                        $ii->qty = $row->qty;
                        $ii->note = $item->node;

                        $ii->save();
                    }


                }
            }
            return $m;
        }else{
            return null;
        }
    }
    private function insertPurchaseDetail()
    {
        $m = new PurchaseDetail();
        $m->purchase_id = $this->ref_id;
        $m->item_code = $this->item_code;
        $m->qty = $this->qty;
        $m->cost = $this->price;
        $m->discount = $this->discount;
        $m->note = $this->note;
        $m->item_detail = json_encode($this->option);
        if($m->save())
        {
            $this->insertItemTran();
            return $m;
        }else{
            return null;
        }
    }
    private function insertProductionDetail()
    {
        $m = new ProductionDetial();
        $m->production_id = $this->ref_id;
        $m->item_code = $this->item_code;
        $m->qty = $this->qty;
        $m->cost = $this->price;
        $m->discount = $this->discount;
        $m->note = $this->note;
        $m->item_detail = json_encode($this->option);
        if($m->save())
        {
            $this->insertItemTran();
            return $m;
        }else{
            return null;
        }
    }
    private function insertInvoiceDetail(){
        $m = new InvoiceDetail();
        $m->invoice_id = $this->ref_id;
        $m->item_code = $this->item_code;
        $m->title = $this->title;
        $m->qty = $this->qty;
        $m->cost = $this->price;
        $m->discount = $this->discount;
        $m->note = $this->note;
        $m->item_detail = json_encode($this->option);
        if($m->save())
        {
            return $m;
        }else{
            return null;
        }
    }
    private function insertItemTran()
    {
        if ($this->open_id >0){
            $m = ItemTransaction::where('item_id',$this->item_id)->where('ref_type',$this->ref_type)->first();
//            dd($m);

        }else{
            $m = new ItemTransaction();

        }
        if ($this->ref_type == 'open'){
            $n = OpenItems::find($this->ref_id);
        }else if ($this->ref_type == 'purchase'){
            $n = Purchase::find($this->ref_id);
        }else if ($this->ref_type == 'production'){
            $n = Production::find($this->ref_id);
        }
        $m->ref_id = $this->ref_id;
        $m->ref_type  = $this->ref_type;
        $m->item_id    = $this->item_id;
        $m->unit  = $this->unit;
        $m->qty = $this->qty;
        $m->cost = $this->price;
        $m->discount = $this->discount;
        if ($this->ref_type == 'invoice'){
            $m->price  = $this->price;
        }else{
            $m->price  = 0;
        }
        $m->tran_date  = isset($n)?$n->_date_:null;
        if ($m->save()){
            return $m;
        }
       return null;
    }
}
