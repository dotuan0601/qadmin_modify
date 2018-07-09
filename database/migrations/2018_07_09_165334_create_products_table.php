<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateProductsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('products',function(Blueprint $table){
            $table->increments("id");
            $table->string("name")->nullable();
            $table->string("img")->nullable();
            $table->string("short_description")->nullable();
            $table->integer("frmenu_id")->references("id")->on("frmenu")->nullable();
            $table->integer("productcategory_id")->references("id")->on("productcategory")->nullable();
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
        Schema::drop('products');
    }

}