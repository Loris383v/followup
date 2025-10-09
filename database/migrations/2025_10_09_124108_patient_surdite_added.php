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
        Schema::create('origineSurdite', function (Blueprint $table) {
            $table->id();
            $table->string('natureSurdite');
            $table->timestamps();
        });
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateNaissance');
            $table->integer('ageDepistageSurdite')->nullable();
            $table->integer('agePremierImplant')->nullable();
            $table->integer('ageDeuxiemeImplant')->nullable();



            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('origineSurdite');
        Schema::dropIfExists('patients');
    }
};
