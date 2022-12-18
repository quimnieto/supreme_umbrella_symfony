<?php

declare(strict_types=1);

namespace SupremeUmbrella\Backoffice\Users\Domain;

use SupremeUmbrella\Backoffice\Users\Domain\ValueObject\UserFirstName;
use SupremeUmbrella\Backoffice\Users\Domain\ValueObject\UserId;
use SupremeUmbrella\Backoffice\Users\Domain\ValueObject\UserLastName;

final class User
{
    private function __construct(
      public readonly UserId $id,
      private UserFirstName   $firstName,
      private UserLastName    $lastName,
    ) {
    }

    public static function create(
        UserId $id,
        UserFirstName $firstName,
        UserLastName $lastName,
    ): self {
        return new self($id, $firstName, $lastName);
    }

    public function firstName(): UserFirstName
    {
        return $this->firstName;
    }

    public function setFirstName(UserFirstName $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function lastName(): UserLastName
    {
        return $this->lastName;
    }

    public function setLastName(UserLastName $lastName): void
    {
        $this->lastName = $lastName;
    }
}
