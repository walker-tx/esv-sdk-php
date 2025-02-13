<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WalkerTx\Esv\Models\Errors;

use WalkerTx\Esv\Utils;
class Error
{
    /**
     *
     * @var string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    public string $code;

    /**
     *
     * @var string $message
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message')]
    public string $message;

    /**
     * $details
     *
     * @var ?array<string, mixed> $details
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('details')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $details = null;

    /**
     * @param  string  $code
     * @param  string  $message
     * @param  ?array<string, mixed>  $details
     * @phpstan-pure
     */
    public function __construct(string $code, string $message, ?array $details = null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->details = $details;
    }

    public function toException(): ErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = $this->code;

        return new ErrorThrowable($message, (int) $code, $this);
    }
}