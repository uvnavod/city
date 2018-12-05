<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTownTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('town', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name', 30);
            $table->integer('dist_id');
            $table->timestamp('c_date')->useCurrent();
            $table->timestamp('m_date')->useCurrent();

            /*
             * Add foreign key
             */
            $table->foreign('dist_id')->refrences('id')->on('district');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('town');
    }
}
