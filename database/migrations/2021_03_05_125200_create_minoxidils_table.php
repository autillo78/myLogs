<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinoxidilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minoxidils', function (Blueprint $table) {
            
            // COLUMNS
            $table->mediumIncrements('id');
            $table->date('date');
            $table->tinyInteger('volume');

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
        Schema::dropIfExists('minoxidils');
    }
}
