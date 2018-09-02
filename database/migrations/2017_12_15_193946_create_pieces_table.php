<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pieces', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('author');
            $table->text('body');
            $table->text('genre');
            $table->text('edition');
            $table->text('quote');
            $table->text('grad_year');
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
        Schema::dropIfExists('Pieces');
    }
}
