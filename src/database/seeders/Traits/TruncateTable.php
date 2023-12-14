<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

/**
 * 
 */
trait TruncateTable
{
    /**
     * 
     *
     * @param [type] $table
     * @return void
     */
    protected function truncate($table)
    {
        DB::table($table)->truncate();
    }
}