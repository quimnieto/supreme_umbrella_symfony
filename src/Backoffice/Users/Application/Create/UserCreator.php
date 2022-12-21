<?php

declare(strict_types=1);

namespace SupremeUmbrella\Backoffice\Users\Application\Create;

use SupremeUmbrella\Backoffice\Users\Domain\User;
use SupremeUmbrella\Backoffice\Users\Domain\UserRepository;

final class UserCreator
{
    public function __construct(private Readonly UserRepository $repository)
    {
    }

    public function __invoke(string $userId, string $firstName, string $lastName): void
    {
        $user = User::fromPrimitives($userId, $firstName, $lastName);

        $this->repository->save($user);
    }
}
