<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_id')->index()->nullable();
            $table->integer('ref_id')->index()->nullable();
            $table->integer('item_id')->index()->nullable();
            $table->double('qty')->nullable();
            $table->double('cost')->nullable();
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
        Schema::dropIfExists('purchase_detail');
    }
}
