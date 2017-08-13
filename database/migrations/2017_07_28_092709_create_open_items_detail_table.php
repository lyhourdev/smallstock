<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenItemsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_items_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('open_id')->index()->nullable();
            $table->integer('item_id')->index()->nullable();
            $table->double('qty')->nullable();
            $table->double('cost')->nullable();
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
        Schema::dropIfExists('open_items_detail');
    }
}
