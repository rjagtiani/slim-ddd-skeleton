<?php

namespace Tests\E2E;

use PHPUnit\Framework\TestCase;
use Tests\Shared\Trait\RequestTrait;

class HealthCheckTest extends TestCase
{
    use RequestTrait;

    public function testStatusOK()
    {
        $output = $this->makeRequest();
        $response = json_decode($output);

        $this->assertEquals($response->status, 'OK');
        $this->assertEquals($response->code, 200);
    }

}
