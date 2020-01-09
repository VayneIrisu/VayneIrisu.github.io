<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBukutamu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukutamu', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('id_guest');
            $table->string('nama');
            $table->string('alamat');
            $table->string('email')->unique();
            $table->text('pesan');
            $table->timestamps();

            // $table->foreign("id_guest")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukutamu');
    }
}
