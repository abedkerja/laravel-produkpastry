<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_stock', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('produk_id')->unsigned();
            $table->foreign('produk_id')->references('id')->on('tabel_produk');

            $table->bigInteger('jumlah_stok');
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
        Schema::dropIfExists('tabel_stock');
    }
}
