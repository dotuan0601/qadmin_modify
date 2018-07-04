<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateFooterSitemapTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('footersitemap',function(Blueprint $table){
            $table->increments("id");
            $table->string("name")->nullable();
            $table->string("parent_id")->nullable();
            $table->tinyInteger("is_parent")->default(0)->nullable();
            $table->string("link")->nullable();
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
        Schema::drop('footersitemap');
    }

}