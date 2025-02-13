<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WalkerTx\Esv\Models\Operations;


class Verses
{
    /**
     * Verse reference
     *
     * @var ?string $verse
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('verse')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $verse = null;

    /**
     * Verse text
     *
     * @var ?string $text
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('text')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $text = null;

    /**
     * @param  ?string  $verse
     * @param  ?string  $text
     * @phpstan-pure
     */
    public function __construct(?string $verse = null, ?string $text = null)
    {
        $this->verse = $verse;
        $this->text = $text;
    }
}