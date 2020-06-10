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

            $table->string('nama_bank_1')->nullable();
            $table->string('logo_bank_1')->nullable();
            $table->string('nama_bank_2')->nullable();
            $table->string('logo_bank_2')->nullable();
            $table->string('nama_bank_3')->nullable();
            $table->string('logo_bank_3')->nullable();

            $table->string('nama_rekening_bank_1')->nullable();
            $table->string('nomor_rekening_bank_1')->nullable();
            $table->string('nama_rekening_bank_2')->nullable();
            $table->string('nomor_rekening_bank_2')->nullable();
            $table->string('nama_rekening_bank_3')->nullable();
            $table->string('nomor_rekening_bank_3')->nullable();

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
