<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelResep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_resep', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_resep');
            $table->string('image_resep')->comment('Hanya menampilkan pathnya saja');
            $table->text('deskripsi_resep');
            $table->string('author');
            // $table->string('category');
            $table->integer('views')->default(0)->unsigned();
            $table->enum('status', ['PUBLISH', 'DRAFT']);
            $table->string('created_by');
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
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
        Schema::dropIfExists('tabel_resep');
    }
}
