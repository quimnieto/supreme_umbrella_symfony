<?php

declare(strict_types=1);

namespace SupremeUmbrella\Apps\Backoffice\Backend\Controller\Users;

use SupremeUmbrella\Backoffice\Users\Application\Search\AllUsersSearcher;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

final class UsersGetController
{

    public function __construct(private Readonly AllUsersSearcher $searcher)
    {
    }

    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse(
            [
                'users_get' => 'ok',
                'user' => $this->searcher->searchAll()
            ]
        );
    }
}
