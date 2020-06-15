<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifikasiBlogTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('tabel_blog')) {
            Schema::table('tabel_blog', function (Blueprint $table) {
                $table->string('slug_blog')->after('judul_blog');
            });
        }

        // Schema::table('tabel_blog', function (Blueprint $table) {
        //     $table->string('slug_blog')->after('judul_blog');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tabel_blog', function (Blueprint $table) {
            //
        });
    }
}
