<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Shared\Infrastructure\UI\Controller\HealthCheckController::class);
};