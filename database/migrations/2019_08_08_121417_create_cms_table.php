<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('LIQROO_ID');
            $table->string('liqroo_url',2083);
            $table->integer('liqroo_price');
            $table->string('URL1',2083);
            $table->integer('URL1_price');
            $table->string('URL2',2083);
            $table->integer('URL2_price');
            $table->string('URL3',2083);
            $table->integer('URL3_price');
            $table->string('URL4',2083);
            $table->integer('URL4_price');
            $table->string('URL5',2083);
            $table->integer('URL5_price');
            $table->integer('Last_Updated_By');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms');
    }
}
