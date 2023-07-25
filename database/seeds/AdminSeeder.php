<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Path to the SQL file
        $sqlFile = storage_path('app/your_sql_file.sql');

        // Read the SQL file
        $sql = File::get($sqlFile);

        // Execute the SQL statements using Laravel's DB facade
        DB::unprepared($sql);
    }
}
