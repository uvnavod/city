<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name', 30);
            $table->integer('city_id');
            $table->timestamp('c_date')->useCurrent();
            $table->timestamp('m_date')->useCurrent();

            /*
             * Add foreign
             */
            $table->foreign('city_id')->references('id')->on('city');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('district');
    }
}
