<?php

namespace Sidvanvliet\LaravelGiftyVouchers\Tests\Feature;

use Sidvanvliet\LaravelGiftyVouchers\Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testEndpoint()
    {
        $response = $this->get('https://api.gifty.nl/v1/balance/1000');
        $response->assertNotFound();
    }
}
