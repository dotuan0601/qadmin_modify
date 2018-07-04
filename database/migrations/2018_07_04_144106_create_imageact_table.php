<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateImageActTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('imageact',function(Blueprint $table){
            $table->increments("id");
            $table->string("img_small")->nullable();
            $table->string("img_large")->nullable();
            $table->string("img_title")->nullable();
            $table->tinyInteger("is_feature")->default(0)->nullable();
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
        Schema::drop('imageact');
    }

}