<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_services_features', function (Blueprint $table) {
            $table->id('id_services_features');

            $table->unsignedBigInteger('id_services');
            $table->foreign('id_services')->references('id_services')
                ->on('tb_services')->cascadeOnDelete();

            # column names
            $table->string('features');

            # other columns
            $table->integer('sort_order')->default(0);
            $table->enum('status_data', ['Active', 'Not Active'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_services_features');
    }
};
