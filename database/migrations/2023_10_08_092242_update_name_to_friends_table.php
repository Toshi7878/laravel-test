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
        Schema::table('friends', function (Blueprint $table) {
            $table->string('last_name', 100)->change();
            $table->string('first_name', 100)->change();
            $table->renameColumn('postal','postal_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('friends', function (Blueprint $table) {
            //
            $table->string('last_name', 255)->change();
            $table->string('first_name', 255)->change();
            $table->renameColumn('postal_code','postal');
        });
    }
};
