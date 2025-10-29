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
        Schema::table('students', function (Blueprint $table) {
            // Add gender column after email if not exists
            if (!Schema::hasColumn('students', 'gender')) {
                $table->enum('gender', ['L', 'P'])->after('email');
            }
            
            // Add guardian_id column after classroom_id if not exists
            if (!Schema::hasColumn('students', 'guardian_id')) {
                $table->foreignId('guardian_id')->nullable()->after('classroom_id')->constrained('guardians')->onDelete('set null');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            if (Schema::hasColumn('students', 'guardian_id')) {
                $table->dropForeign(['guardian_id']);
                $table->dropColumn('guardian_id');
            }
            
            if (Schema::hasColumn('students', 'gender')) {
                $table->dropColumn('gender');
            }
        });
    }
};