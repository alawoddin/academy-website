<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('users') || ! Schema::hasColumn('users', 'status')) {
            return;
        }

        DB::table('users')
            ->where('role', 'admin')
            ->update(['status' => 'approved']);

        DB::table('users')
            ->where('role', 'instructor')
            ->whereIn('status', ['1', 1, ''])
            ->update(['status' => 'approved']);
    }

    public function down(): void
    {
        //
    }
};
