<?php

namespace RomegaDigital\Multitenancy\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;

class UnauthorizedException extends HttpException
{
    /**
     * A user does not have valid permissions to access
     * the supplied domain.
     *
     * @param string $domain
     *
     * @return static
     */
    public static function forDomain(string $domain): self
    {
        $message = __("Sorry, you do not have access to this domain.");

        $exception = new static(403, $message, null, []);

        return $exception;
    }

    /**
     * A user is not logged in.
     *
     * @return static
     */
    public static function notLoggedIn(): self
    {
        return new static(403, 'User is not logged in.', null, []);
    }
}
