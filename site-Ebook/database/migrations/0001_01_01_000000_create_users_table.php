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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 191)->nullable();
            $table->string('prenom')->nullable();
            $table->integer('age')->nullable();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->string('address')->nullable();
            $table->integer('numero')->nullable();
            $table->string('email')->nullable();
            $table->string('profession')->nullable();
            $table->enum('type_de_transaction', ['national', 'internationale', 'carte', 'autre']);
            $table->enum('moyen_denvoi', ['email', 'numero']);
            $table->boolean('validation')->default(0);
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email', 191)->primary();
            $table->string('token', 191);
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id', 191)->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
