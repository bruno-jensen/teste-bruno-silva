<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MigrationTest extends TestCase
{
    
    /**
     * A basic unit test example.
     *
     * @return void
     */
    //public function test_example()
    //{
    //    $this->assertTrue(true);
    //}    
    
    /**
     * Create contact table.
     *
     * @test
     */
    public function contact_table()
    {
        $this->assertTrue(
            Schema::hasTable('contact')
            );
    }
}
