<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatsTable extends Migration
{
    public function up()
{
    Schema::create('riwayats', function (Blueprint $table) {
        $table->id();
        $table->integer('candidate_id');
        $table->string('nama');
        $table->string('alamat')->nullable();
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('riwayats');
    }
}
