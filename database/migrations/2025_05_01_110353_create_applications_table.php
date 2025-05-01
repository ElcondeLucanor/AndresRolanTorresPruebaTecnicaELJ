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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            // constrained -> Llave foránea asociada automáticamente a la tabla correspondiente (candidates u offers)
            // onDelete('cascade') -> Elimina automáticamente las applications asociadas a un candidate u offer que se haya eliminado 
            $table->foreignId('candidate_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('offer_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
