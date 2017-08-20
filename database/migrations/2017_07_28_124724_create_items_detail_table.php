<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ref_id')->nullable();
            $table->string('ref_type')->nullable();
            $table->integer('item_id')->index()->nullable();
            $table->string('item_code')->index()->nullable();
            $table->double('qty')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_detail');
    }
}
