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
        Schema::table('notes', function (Blueprint $table) {
            $table->string('author')->after('description'); // nueva columna en la tabla 'notes'
            $table->dropColumn(['deadline']); // eliminar columna
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('notes', ['author']);

       /*  Schema::table('notes', function (Blueprint $table) {
            // autocreado con la migración
        }); */        
    }
};
