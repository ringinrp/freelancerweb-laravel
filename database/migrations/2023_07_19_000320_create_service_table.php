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
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->index('fk_service_to_users');
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->integer('delivery_time')->nullable();
            $table->integer('revision_limit')->nullable();
            $table->string('price')->nullable();
            $table->longText('note')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
