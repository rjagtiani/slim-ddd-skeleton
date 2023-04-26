<?php

namespace App\Shared\Infrastructure\UI\Controller;

use Psr\Http\Message\RequestInterface;

class AbstractController
{
    protected function getQueryAttributes(RequestInterface $request): array
    {
        $query = $request->getUri()->getQuery();
        $params = [];
        parse_str($query, $params);

        return $params;
    }
}