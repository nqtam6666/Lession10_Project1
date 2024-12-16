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
        Schema::create('nqtdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nqtSoDH')->primary();
            $table->date('nqtNgayDH');
            $table->string('nqtMaNCC');
            $table->foreign('nqtMaNCC')->references('nqtMaNCC')->on('nqtNhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nqtdondh');
    }
};
