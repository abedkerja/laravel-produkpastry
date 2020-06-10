<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelGaleri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_galeri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_galeri');
            $table->string('image_galeri')->comment('Hanya menampilkan pathnya saja');
            $table->text('deskripsi_galeri');
            $table->integer('views')->default(0)->unsigned();
            $table->enum('status', ['PUBLISH', 'DRAFT']);
            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_galeri');
    }
}
