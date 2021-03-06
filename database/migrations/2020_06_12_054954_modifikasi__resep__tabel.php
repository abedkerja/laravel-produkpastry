<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifikasiResepTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('tabel_resep')) {
            Schema::table('tabel_resep', function (Blueprint $table) {
                $table->string('slug_resep')->after('judul_resep');
            });
        }

        // Schema::table('tabel_resep', function (Blueprint $table) {
        //     $table->string('slug_resep')->after('judul_resep');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tabel_resep', function (Blueprint $table) {
            //
        });
    }
}
