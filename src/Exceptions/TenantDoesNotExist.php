<?php

namespace RomegaDigital\Multitenancy\Exceptions;

use InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\HttpException;


class TenantDoesNotExist extends HttpException
{
    /**
     * A Tenant does not exist at the supplied domain.
     *
     * @param string $domain
     *
     * @return static
     */
    public static function forDomain(string $domain): self
    {
        // $message = "The authenticated user does not have access to domain `{$domain}`.";
        abort(403, 'Unauthorized action.');
        $message = "No access";

        // $exception = new static(404, $message, null, []);
        $exception = new static(403, $message, null, []);

        return $exception;

    }
}
