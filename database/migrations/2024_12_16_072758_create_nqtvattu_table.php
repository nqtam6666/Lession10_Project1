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
        Schema::create('nqtvattu', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nqtMaVTu')->primary();
            $table->string('nqtTenVTu')->unique();
            $table->string('nqtDvTinh');
            $table->float('nqtPhanTram');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nqtvattu');
    }
};
