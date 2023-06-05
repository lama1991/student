<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
<<<<<<< HEAD
    public function hosts()
=======
    public function hosts(): array
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
