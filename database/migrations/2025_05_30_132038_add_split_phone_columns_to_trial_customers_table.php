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
        Schema::table('trial_customers', function (Blueprint $table) {
            $table->string('phone_area_code', 5)->nullable()->after('email');        // 市外局番
            $table->string('phone_local_code', 5)->nullable()->after('phone_area_code'); // 市内局番
            $table->string('phone_subscriber', 5)->nullable()->after('phone_local_code'); // 加入者番号

            $table->dropColumn('phone'); // 元のphoneカラムを消す場合（任意）
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trial_customers', function (Blueprint $table) {
            $table->dropColumn(['phone_area_code', 'phone_local_code', 'phone_subscriber']);
            $table->string('phone')->nullable(); // 元に戻す（必要な場合）
        });
    }
};
