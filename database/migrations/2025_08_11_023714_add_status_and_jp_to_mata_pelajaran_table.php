<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tbl_mata_pelajaran', function (Blueprint $table) {
            $table->enum('status', ['Aktif', 'Tidak Aktif'])
                ->default('Aktif')
                ->after('kkm');

            $table->integer('jumlah_jp')
                ->nullable()
                ->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_mata_pelajaran', function (Blueprint $table) {
            $table->dropColumn(['status', 'jumlah_jp']);
        });
    }
};
