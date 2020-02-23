<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelTestimonial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_testimonial', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nama_testi');
            $table->string('image_testi')->comment('Hanya menampilkan pathnya saja');
            $table->text('deskripsi_testi');
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
        Schema::dropIfExists('tabel_testimonial');
    }
}
