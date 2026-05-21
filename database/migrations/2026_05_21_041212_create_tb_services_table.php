<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_services', function (Blueprint $table) {
            $table->id('id_services');

            # column names
            $table->string('icon')->nullable();
            $table->string('category');
            $table->string('title');
            $table->text('description');
            $table->string('tech_stack')->nullable();
            $table->string('slug')->nullable();

            # other columns
            $table->integer('sort_order')->default(0);
            $table->enum('status_data', ['Active', 'Not Active'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_services');
    }
};
