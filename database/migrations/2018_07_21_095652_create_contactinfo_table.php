<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateContactInfoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('contactinfo',function(Blueprint $table){
            $table->increments("id");
            $table->string("company_name")->nullable();
            $table->text("address")->nullable();
            $table->string("first_phone")->nullable();
            $table->string("second_phone")->nullable();
            $table->string("third_phone")->nullable();
            $table->string("email")->nullable();
            $table->string("work_time")->nullable();
            $table->string("work_day")->nullable();
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
        Schema::drop('contactinfo');
    }

}