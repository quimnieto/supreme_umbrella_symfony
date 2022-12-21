<?php

declare(strict_types=1);

namespace SupremeUmbrella\Apps\Hotels\Backend\Controller\HealthCheck;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

final class HealthCheckGetController
{
    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse(
            [
                'hotels-backend' => 'ok',
            ]
        );
    }
}
