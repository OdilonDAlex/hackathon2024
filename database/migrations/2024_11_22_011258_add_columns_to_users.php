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
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname');
            $table->integer('age')->nullable();
            $table->string('role')->default('user');
            $table->boolean('isAdmin')->default(false);
            $table->string('address')->nullable();
            $table->string('phoneNumber')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('firstname');
            $table->dropColumn('age');
            $table->dropColumn('role');
            $table->dropColumn('isAdmin');
            $table->dropColumn('address');
            $table->dropColumn('phoneNumber');
        });
    }
};
