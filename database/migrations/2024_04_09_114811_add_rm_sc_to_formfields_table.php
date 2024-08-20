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
        Schema::table('formfields', function (Blueprint $table) {
            $table->unsignedBigInteger('rm_id')->nullable();
            $table->timestamp('rm_modified_at')->nullable();
            $table->unsignedBigInteger('sc_id')->nullable();
            $table->timestamp('sc_modified_at')->nullable();
            $table->tinyInteger('state')->default(0);

            $table->foreign('rm_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('sc_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('formfields', function (Blueprint $table) {
            $table->dropForeign(['rm_id']);
            $table->dropForeign(['sc_id']);

            $table->dropColumn('rm_id');
            $table->dropColumn('sc_id');
            $table->dropColumn('rm_modified_at');
            $table->dropColumn('sc_modified_at');
            $table->dropColumn('state');
        });
    }
};
