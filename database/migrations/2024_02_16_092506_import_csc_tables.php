<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\File;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $sql_dump = File::get('public/sql/world.sql');
        DB::connection()->getPdo()->exec($sql_dump);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
