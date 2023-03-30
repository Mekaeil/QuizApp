<?php

declare(strict_types=1);

namespace QuizApp\Core\Component\User\Application\Repository;

use Lib\Identity\Email;
use QuizApp\Core\Component\User\Domain\UserDomain;

interface UserRepositoryInterface
{
    public function findByEmail(Email $email): UserDomain;
}
