<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\Framework\Laravel\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

final class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function hosts(): array
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
