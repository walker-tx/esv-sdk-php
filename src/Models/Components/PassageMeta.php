<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Esv\Models\Components;


class PassageMeta
{
    /**
     *
     * @var ?string $canonical
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('canonical')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $canonical = null;

    /**
     * $chapterStart
     *
     * @var ?array<int> $chapterStart
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('chapter_start')]
    #[\Speakeasy\Serializer\Annotation\Type('array<int>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $chapterStart = null;

    /**
     * $chapterEnd
     *
     * @var ?array<int> $chapterEnd
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('chapter_end')]
    #[\Speakeasy\Serializer\Annotation\Type('array<int>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $chapterEnd = null;

    /**
     *
     * @var ?int $prevVerse
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('prev_verse')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $prevVerse = null;

    /**
     *
     * @var ?int $nextVerse
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('next_verse')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $nextVerse = null;

    /**
     * $prevChapter
     *
     * @var ?array<int> $prevChapter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('prev_chapter')]
    #[\Speakeasy\Serializer\Annotation\Type('array<int>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $prevChapter = null;

    /**
     * $nextChapter
     *
     * @var ?array<int> $nextChapter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('next_chapter')]
    #[\Speakeasy\Serializer\Annotation\Type('array<int>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $nextChapter = null;

    /**
     * @param  ?string  $canonical
     * @param  ?array<int>  $chapterStart
     * @param  ?array<int>  $chapterEnd
     * @param  ?int  $prevVerse
     * @param  ?int  $nextVerse
     * @param  ?array<int>  $prevChapter
     * @param  ?array<int>  $nextChapter
     * @phpstan-pure
     */
    public function __construct(?string $canonical = null, ?array $chapterStart = null, ?array $chapterEnd = null, ?int $prevVerse = null, ?int $nextVerse = null, ?array $prevChapter = null, ?array $nextChapter = null)
    {
        $this->canonical = $canonical;
        $this->chapterStart = $chapterStart;
        $this->chapterEnd = $chapterEnd;
        $this->prevVerse = $prevVerse;
        $this->nextVerse = $nextVerse;
        $this->prevChapter = $prevChapter;
        $this->nextChapter = $nextChapter;
    }
}