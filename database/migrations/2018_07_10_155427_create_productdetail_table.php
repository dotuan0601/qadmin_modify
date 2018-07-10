<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateProductDetailTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('productdetail',function(Blueprint $table){
            $table->increments("id");
            $table->integer("products_id")->references("id")->on("products")->nullable();
            $table->text("ingredient")->nullable();
            $table->string("main_part")->nullable();
            $table->text("instruction")->nullable();
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
        Schema::drop('productdetail');
    }

}