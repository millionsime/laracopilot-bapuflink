<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('qr_codes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_id')->constrained();
            $table->string('token')->unique();
            $table->enum('status', ['unused', 'verified', 'suspicious'])->default('unused');
            $table->integer('scan_count')->default(0);
            $table->timestamp('first_scan_time')->nullable();
            $table->string('first_scan_location')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('qr_codes');
    }
};