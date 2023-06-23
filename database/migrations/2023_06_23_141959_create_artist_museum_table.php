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
        Schema::create('artist_museum', function (Blueprint $table) {
            $table->id();
            //questa è la relazione con la tabella projects
            $table->unsignedBigInteger('artist_id');

            //creo la fk
            $table->foreign('artist_id')
                    ->references('id')
                    ->on('artists')
                    ->cascadeOnDelete();


            //questa è la relazione con la tabella technologies
            $table->unsignedBigInteger('museum_id');

            //creo la fk
            $table->foreign('museum_id')
                    ->references('id')
                    ->on('museums')
                    ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artist_museum');
    }
};
