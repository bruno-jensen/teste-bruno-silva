<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ModelTest extends TestCase
{
    
    /**
     * Important! All tests must be created using the name test_mytest. Otherwise, it 
     * does not work.
     */
    
    /**
     * A basic unit test example.
     *
     * @return void
     */
    //public function test_example()
    //{
    //    $this->assertTrue(true);
    //}    
    
    public function test_creation_model_contact()
    {
        $this->assertTrue(
            class_exists('App\Models\contact\Contact')
            );
    }   
    
}
