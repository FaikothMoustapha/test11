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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string('nomStag');
            $table->string('prenStag');
            $table->date('datNais');
            $table->string('adrStag');
            $table->string('genre');
            $table->string('email')->unique();
            $table->string('tel');
            $table->date('datDebut');
            $table->date('datFin');
            $table->text('theme');
            $table->foreignId('ecole_id')->constrained('ecoles');
             $table->foreignId('filiere_id')->constrained('filieres');
             $table->foreignId('type_stage_id')->constrained('type_stages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
