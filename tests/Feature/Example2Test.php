<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Example2Test extends TestCase
{
    use RefreshDatabase;

    protected bool $seed = true;

    public function test_true_1(): void
    {
        $this->assertTrue(true);
    }

    public function test_true_2(): void
    {
        $this->assertTrue(true);
    }

    public function test_true_3(): void
    {
        $this->assertTrue(true);
    }
}
