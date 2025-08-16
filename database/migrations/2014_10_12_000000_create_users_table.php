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

            $table->string('email', 255)->unique();
            $table->string('full_name', 255);





            $table->string('degree', 255)->nullable();
            $table->string('organization', 255)->nullable();
            $table->string('city_country', 255)->nullable();
            $table->string('phone', 50)->nullable();
            $table->enum('participation', ['onsite', 'online'])->nullable();
            $table->string('section', 255)->nullable();
            $table->string('presentation', 255)->nullable();
            $table->boolean('hotel')->nullable();
            $table->date('arrival_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->boolean('tour')->nullable();
            $table->string('tezis')->nullable(); // Fayl nomi yoki yo‘li saqlash uchun



            $table->string("is_admin")->default(false);

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
