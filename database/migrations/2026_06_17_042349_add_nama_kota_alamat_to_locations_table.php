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
        Schema::table('locations', function (Blueprint $table) {
            if (!Schema::hasColumn('locations', 'nama_kota')) {
                $table->string('nama_kota')->after('id');
            }
            if (!Schema::hasColumn('locations', 'alamat')) {
                $table->string('alamat')->after('nama_kota');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('locations', function (Blueprint $table) {
            if (Schema::hasColumn('locations', 'alamat')) {
                $table->dropColumn('alamat');
            }
            if (Schema::hasColumn('locations', 'nama_kota')) {
                $table->dropColumn('nama_kota');
            }
        });
    }
};
