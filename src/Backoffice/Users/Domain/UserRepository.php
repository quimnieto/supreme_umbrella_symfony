<?php

namespace SupremeUmbrella\Backoffice\Users\Domain;

interface UserRepository
{
    public function save(User $user): void;

    /**
     * @return User[]
     */
    public function searchAll(): array;
}
