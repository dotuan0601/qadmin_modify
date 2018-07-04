<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateFooterInfoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('footerinfo',function(Blueprint $table){
            $table->increments("id");
            $table->string("company_info")->nullable();
            $table->string("phone")->nullable();
            $table->string("fax")->nullable();
            $table->string("email")->nullable();
            $table->string("copyright")->nullable();
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
        Schema::drop('footerinfo');
    }

}