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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('costs', 10, 2);
            $table->integer('time');
            $table->foreignId('manager_id')->constrained('users');
            $table->timestamps();
        });

        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('end_date');
            $table->boolean('status')->default(false);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('project_id')->constrained();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('projects');
    }
};
