<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->string('nationality');
            $table->date('born');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations drop
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
