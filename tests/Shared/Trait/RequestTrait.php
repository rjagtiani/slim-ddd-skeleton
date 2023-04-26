<?php

declare(strict_types=1);

namespace Tests\Shared\Trait;

use stdClass;

trait RequestTrait
{
    private function makeRequest(
        array $queryParams = []
    ): string {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'localhost?' . http_build_query($queryParams));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PORT, '9000');
        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}