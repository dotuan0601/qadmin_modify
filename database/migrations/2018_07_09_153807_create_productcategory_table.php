<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateProductCategoryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('productcategory',function(Blueprint $table){
            $table->increments("id");
            $table->string("name")->nullable();
            $table->string("img")->nullable();
            $table->tinyInteger("is_home_page")->default(0)->nullable();
            $table->tinyInteger("status")->default(1)->nullable();
            $table->integer("frmenu_id")->references("id")->on("frmenu")->nullable();
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
        Schema::drop('productcategory');
    }

}