<?php

declare(strict_types=1);

namespace WalkerTx\Esv\Hooks;

use Psr\Http\Message\RequestInterface;

class CustomPrefixApiKey implements BeforeRequestHook
{
    private string $prefix = 'Token';
    private string $headerKey = 'Authorization';

    public function beforeRequest(BeforeRequestContext $context, RequestInterface $request): RequestInterface
    {

        $apiKeyInput = $context->securitySource->call($context)->apiKey;

        if (! is_string($apiKeyInput)) {
            return $request;
        }

        if (str_starts_with($apiKeyInput, $this->prefix)) {
            return $request;
        }

        $newRequest = $request->withHeader($this->headerKey, "$this->prefix $apiKeyInput");

        return $newRequest;
    }
}
