<?php

declare(strict_types=1);

namespace SupremeUmbrella\Backoffice\Users\Application\Search;

use SupremeUmbrella\Backoffice\Users\Domain\UserRepository;

final class AllUsersSearcher
{
    public function __construct(private Readonly UserRepository $repository)
    {
    }

    public function searchAll(): array
    {
        return $this->repository->searchAll();
    }
}
