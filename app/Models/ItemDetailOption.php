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
    function __construct($item_code = 0,$title = '', $unit = '' ,$qty = 0,$price = 0,$discount = 0,$option = [],$ref_id = 0,$ref_type = '',$note = '',$item_id = 0)
    {
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
        if($this->item_code > 0)
        {
            return Item::find($this->item_code);
        }else {
            $m = new Item();

            $m->item_code = $this->item_code;
            $m->title = $this->title;
            $m->description =$this->note;

            if ($m->save()) {
                $this->item_id = $m->id;
            } else {
                return null;
            }
        }
    }
    private function insertOpenItemDetail()
    {
        $m = new OpenItemsDetail();
        $m->open_id = $this->ref_id;
        $m->item_id = $this->item_id;
        $m->qty = $this->qty;
        $m->cost = $this->price;
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
            $this->insertItemTran();
            return $m;
        }else{
            return null;
        }
    }
    private function insertItemTran()
    {
        if ($this->ref_type == 'open'){
            $n = OpenItems::find($this->ref_id);
        }else if ($this->ref_type == 'purchase'){
            $n = Purchase::find($this->ref_id);
        }else if ($this->ref_type == 'production'){
            $n = Production::find($this->ref_id);
        }
        $m = new ItemTransaction();
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
        $m->tran_date  = isset($n)?$n->_date_:0;
        if ($m->save()){
            return $m;
        }
       return null;
    }
}
