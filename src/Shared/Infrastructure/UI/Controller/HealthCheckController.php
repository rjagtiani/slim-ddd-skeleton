<?php

namespace App\Shared\Infrastructure\UI\Controller;


use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HealthCheckController extends AbstractController
{
    public function __construct()
    {
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $response->withHeader('Content-type', 'application/json');
        $response->getBody()->write(
            json_encode([
                'status' => 'OK',
                'code' => 200
            ])
        );

        return $response->withStatus(200);
    }
}
