<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifikasiProdukTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('tabel_produk')) {
            Schema::table('tabel_produk', function (Blueprint $table) {
                $table->string('slug_produk')->after('nama_produk');
            });
        }

        // Schema::table('tabel_produk', function (Blueprint $table) {
        //     $table->string('slug_produk')->after('nama_produk');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tabel_produk', function (Blueprint $table) {
            //
        });
    }
}
