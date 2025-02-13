<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WalkerTx\Esv\Models\Operations;

use WalkerTx\Esv\Utils\SpeakeasyMetadata;
class SearchPassagesRequest
{
    /**
     * The text to search for
     *
     * @var string $query
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=q')]
    public string $query;

    /**
     * Number of results to return per page
     *
     * @var ?int $pageSize
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page-size')]
    public ?int $pageSize = null;

    /**
     * Page number to return
     *
     * @var ?int $page
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?int $page = null;

    /**
     * @param  string  $query
     * @param  ?int  $pageSize
     * @param  ?int  $page
     * @phpstan-pure
     */
    public function __construct(string $query, ?int $pageSize = 20, ?int $page = 1)
    {
        $this->query = $query;
        $this->pageSize = $pageSize;
        $this->page = $page;
    }
}