<?php

declare(strict_types=1);

namespace SupremeUmbrella\Apps\Backoffice\Backend\Controller\Users;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

final class UsersGetController
{
    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse(
            [
                'users_get' => 'ok',
            ]
        );
    }
}
