<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemDetailOption
{
    var $item_id = 0;
    var $item_name = '';
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


    function __construct($item_id = 0,$unit = '',$qty = 0,$price = 0,$discount = 0,$option = [],$item_name = '',$ref_id = 0,$ref_type = '',$note = '',$title = '')
    {
        $this->item_id = $item_id;
        $this->unit = $unit;
        $this->qty = $qty;
        $this->price = $price;
        $this->discount = $discount;
        $this->amount = $qty*$price - $discount;
        $this->option = $option;
        $this->item_name = $item_name;

        $this->ref_id = $ref_id;

        $this->note = $note;

        $this->title = $title;

        $this->insertItem();

        $this->init();
    }

    private function init()
    {
        if($this->ref_id == 'open')
        {
            $this->insertOpenItem();
        }

        if($this->ref_id == 'purchase')
        {
            $this->insertPurchaseDetail();
        }

        if($this->ref_id == 'invoice')
        {
            $this->insertInvoiceDetail();
        }


    }

    private function insertItem()
    {
        if($this->item_id > 0)
        {
            return Item::find($this->item_id);
        }else {
            $m = new Item();

            $m->title = $this->item_name;

            if ($m->save) {
                $this->item_id = $m->id;
            } else {
                return null;
            }
        }

    }

    private function insertOpenItem()
    {
        $m = new OpenItemsDetail();

        $m->open_id = $this->ref_id;
        $m->item_id = $this->item_id;
        $m->qty = $this->qty;
        $m->cost = $this->price;
        $m->node = $this->note;
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

        $m->item_id = $this->item_id;
        $m->qty = $this->qty;
        $m->cost = $this->price;
        $m->discount = $this->discount;
        $m->node = $this->note;
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

        $m->item_id = $this->item_id;
        $m->title = $this->title;
        $m->qty = $this->qty;
        $m->cost = $this->price;
        $m->discount = $this->discount;
        $m->node = $this->note;
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
