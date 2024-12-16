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
        Schema::create('nqtctdh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table-> string('nqtSoDH');
            $table-> string('nqtMaVTu');
            $table-> integer('nqtsldat');
            $table -> primary(['nqtSoDH', 'nqtMaVTu']);
            $table->foreign('nqtSoDH')->references('nqtSoDH')->on('nqtdondh');
            $table->foreign('nqtMaVTu')->references('nqtMaVTu')->on('nqtvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nqtchitietdondh');
    }
};
