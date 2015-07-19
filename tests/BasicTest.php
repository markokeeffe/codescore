<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testHomepage()
    {
        $this->visit('/')
             ->see('Codescore');
    }
}