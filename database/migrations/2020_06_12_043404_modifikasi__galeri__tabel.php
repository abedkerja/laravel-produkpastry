<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifikasiGaleriTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('tabel_galeri')) {
            Schema::table('tabel_galeri', function (Blueprint $table) {
                $table->string('slug_galeri')->after('judul_galeri');
            });
        }

        // Schema::table('tabel_galeri', function (Blueprint $table) {
        //     $table->string('slug_galeri')->after('judul_galeri');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tabel_galeri', function (Blueprint $table) {
            //
        });
    }
}
