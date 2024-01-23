<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("agency");
            $table->string("depart_station")->nullable();
            $table->string("arrival_station")->nullable();
            $table->time("depert_time")->nullable();
            $table->time("arrival_time")->nullable();
            $table->string("train_code", 6)->unique();
            $table->string("carriage_number");
            $table->boolean("in_time")->default(1);
            $table->boolean("cancelled")->default(1);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
