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
        Schema::create('stire', function (Blueprint $table) {
            $table->mv_id();
            $table->created_dt();
            $table->hour();
            $table->sursa();
            $table->srs_tape();
            $table->srs_tc();
            $table->srs_duration();
            $table->srs_durata();
            $table->dom_gen();
            $table->dom_spc();
            $table->denumire();
            $table->denumire_text();
            $table->denumire_cod();
            $table->titlu();
            $table->stire();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stire');
    }
};
