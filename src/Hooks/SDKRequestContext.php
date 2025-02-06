<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace Esv\Hooks;

class SDKRequestContext
{
    public string $url;
    public \GuzzleHttp\ClientInterface $client;

    public function __construct(string $url, \GuzzleHttp\ClientInterface $client)
    {
        $this->url = $url;
        $this->client = $client;
    }
}
