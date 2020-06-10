<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_blog');
            $table->string('image_blog')->comment('Hanya menampilkan pathnya saja');
            $table->text('deskripsi_blog');
            $table->string('author');
            // $table->string('category');
            $table->integer('views')->default(0)->unsigned();
            $table->enum('status', ['PUBLISH', 'DRAFT']);
            $table->string('created_by');
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
        Schema::dropIfExists('tabel_blog');
    }
}
