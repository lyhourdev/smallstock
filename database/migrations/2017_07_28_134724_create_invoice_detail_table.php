<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('invoice_id')->index()->nullable();
            $table->integer('item_id')->index()->nullable();
            $table->string('title')->nullable();
            $table->double('qty')->nullable();
            $table->double('cost')->nullable();
            $table->double('price')->nullable();
            $table->double('discount')->nullable();
            $table->string('note')->nullable();
            $table->text('item_detail')->nullable();//json detail for item
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_detail');
    }
}
