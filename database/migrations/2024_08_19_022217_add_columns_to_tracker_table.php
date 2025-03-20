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
        Schema::table('trackers', function (Blueprint $table) {
            //
            $table->string('parcelimage')->nullable();
            $table->timestamp('startDatetime')->nullable();
            $table->timestamp('updatedDatetime')->nullable();
            $table->string('shipmentMode')->nullable();
            $table->string('weight')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trackers', function (Blueprint $table) {
            $table->dropColumn(['parcelimage', 'startDatetime', 'updatedDatetime', 'shipmentMode', 'weight']);
        });
    }
};
