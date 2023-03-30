<?php

declare(strict_types=1);

namespace Lib\Identity;

use Carbon\CarbonImmutable;
use Lib\Exception\EmailIsNotValidException;

final class Email
{
    private string $email;

    private ?CarbonImmutable $emailVerifiedAt;

    public function __construct(
        string $email,
        CarbonImmutable $emailVerifiedAt = null
    ) {
        $this->email = $email;
        $this->emailVerifiedAt = $emailVerifiedAt;
    }

    private function emailValidation(): void
    {
        if (! filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new EmailIsNotValidException('Email is not valid!');
        }
    }

    public function value(): string
    {
        return trim($this->email);
    }

    public function verifiedAt(): ?CarbonImmutable
    {
        return $this->emailVerifiedAt;
    }
}
