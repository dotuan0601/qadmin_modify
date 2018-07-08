<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateKnowledgeVideoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('knowledgevideo',function(Blueprint $table){
            $table->increments("id");
            $table->string("name")->nullable();
            $table->string("img")->nullable();
            $table->string("video_src")->nullable();
            $table->tinyInteger("is_feature")->default(0)->nullable();
            $table->integer("knowledgecategory_id")->references("id")->on("knowledgecategory")->nullable();
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
        Schema::drop('knowledgevideo');
    }

}