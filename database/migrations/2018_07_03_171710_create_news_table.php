<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateNewsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('news',function(Blueprint $table){
            $table->increments("id");
            $table->string("title")->nullable();
            $table->string("img")->nullable();
            $table->text("short_description")->nullable();
            $table->tinyInteger("is_feature")->default(0)->nullable();
            $table->text("content")->nullable();
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
        Schema::drop('news');
    }

}