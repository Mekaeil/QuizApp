<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\User\Persistence\Repository\Eloquent;

use Lib\Identity\Email;
use QuizApp\Core\Component\User\Application\Repository\UserRepositoryInterface;
use QuizApp\Core\Component\User\Domain\UserDomain;

final class UserEloquentRepository implements UserRepositoryInterface
{
    public function findByEmail(Email $email): UserDomain
    {
        // TODO: Implement findByEmail() method.
    }
}
