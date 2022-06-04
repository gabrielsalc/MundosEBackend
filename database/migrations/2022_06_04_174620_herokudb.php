<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('email');
            $table->text('message', 1000);
            $table->bigInteger('number');
        });
            //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');//
    }
};
