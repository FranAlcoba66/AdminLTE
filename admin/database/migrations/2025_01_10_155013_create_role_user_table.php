<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Clave foránea para 'users'
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade'); // Clave foránea para 'roles'
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_user');
    }
};
