<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace Esv\Hooks;

use Brick\DateTime\LocalTime;

class Session
{
    public Credentials $credentials;
    public string $token;
    /**
     * @var array<string> scopes
     */
    public array $scopes;
    public ?LocalTime $expiresAt;

    /**
     * @param  Credentials  $credentials
     * @param  string  $token
     * @param  array<string>  $scopes
     * @param  ?LocalTime  $expiresAt
     */
    public function __construct(Credentials $credentials, string $token, array $scopes, ?LocalTime $expiresAt = null)
    {
        $this->credentials = $credentials;
        $this->token = $token;
        $this->scopes = $scopes;
        $this->expiresAt = $expiresAt;
    }
}
