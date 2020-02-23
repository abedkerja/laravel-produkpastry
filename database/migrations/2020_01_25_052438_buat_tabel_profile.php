<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_usaha');
            $table->string('logo_usaha')->comment('Hanya path imagenya saja');
            $table->string('alamat');
            $table->string('nomor_hp');
            $table->string('nama_bank');
            $table->string('logo_bank');
            $table->string('nama_rekening');
            $table->string('nomor_rekening');
            $table->text('deskripsi_profile');
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
        Schema::dropIfExists('tabel_profile');
    }
}
