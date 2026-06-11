<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_employees', function (Blueprint $table) {

            # column names
            $table->id('id_employees');
            $table->string('full_name')->nullable();
            $table->string('role')->nullable(); # Junior Programmer, Senior programmer

            # ...
            $table->string('email')->unique();
            $table->string('password');

            # other columns
            $table->enum('status_data', ['Active', 'Not Active'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_employees');
    }
};
