<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_hero', function (Blueprint $table) {

            # primary key
            $table->id('id_hero');

            # column names
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('keywords_1')->nullable();
            $table->string('keywords_2')->nullable();
            $table->string('keywords_3')->nullable();
            $table->string('keywords_4')->nullable();
            $table->string('keywords_5')->nullable();
            $table->string('cta_1')->nullable();
            $table->string('cta_2')->nullable();

            # other columns
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_hero');
    }
};
