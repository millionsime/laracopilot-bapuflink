<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('qr_code_scans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('qr_code_id')->constrained();
            $table->timestamp('scan_time');
            $table->string('ip_address');
            $table->text('user_agent');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('qr_code_scans');
    }
};