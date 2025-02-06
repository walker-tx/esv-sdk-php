<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace Esv\Hooks;
use Psr\Http\Message\ResponseInterface;

class ErrorResponseContext
{
    public ?ResponseInterface $response;
    public ?\Throwable $e;

    public function __construct(?ResponseInterface $response, ?\Throwable $e)
    {
        $this->response = $response;
        $this->e = $e;
    }
}
