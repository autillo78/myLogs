<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSAMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_a_m_s', function (Blueprint $table) {
           // COLUMNS
           $table->mediumIncrements('id');
           $table->date('date');
           $table->tinyInteger('qty');

           // INDEX
       
           // UNIQUE
           
           // PRIMARY KEYS
           
           // FOREIGN KEYS
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_a_m_s');
    }
}
