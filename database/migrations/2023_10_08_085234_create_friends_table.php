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
        Schema::create('friends', function (Blueprint $table) {
            $table->id();
            // 姓
            $table->string('last_name');
            // 名
            $table->string('first_name');
            // 年齢
            $table->integer('age')->nullable();
            // 郵便番号
            $table->string('postal')->nullable();
            // 住所
            $table->string('address')->nullable();
            // 電話番号
            $table->string('tel')->nullable();
            // created_at
            // update_at
            $table->timestamps();
            // deleted_at
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('friends');
    }
};
