<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('trial_customers', function (Blueprint $table) {
            $table->string('postal_code', 8)->nullable()->after('memo');
            $table->string('prefecture')->nullable()->after('postal_code');
            $table->string('city')->nullable()->after('prefecture');
            $table->string('street')->nullable()->after('city');
            $table->string('building')->nullable()->after('street');
            $table->string('company_name')->nullable();
            $table->string('department')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('trial_customers', function (Blueprint $table) {
            $table->dropColumn(['postal_code', 'prefecture', 'city', 'street', 'building']);
            $table->string('address')->nullable()->after('memo');
        });
    }
};
