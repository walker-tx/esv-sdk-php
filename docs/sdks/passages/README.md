# Passages
(*passages*)

## Overview

### Available Operations

* [getAudio](#getaudio) - Get Bible passage audio
* [getHtml](#gethtml) - Get Bible passage HTML
* [getText](#gettext) - Get Bible passage text
* [search](#search) - Search Bible passages

## getAudio

Returns audio file for Bible passages based on the provided query

Esv.org API Docs for `/v3/passage/audio`
<https://api.esv.org/docs/passage-audio/>

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use WalkerTx\Esv;

$sdk = Esv\Esv::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->passages->getAudio(
    query: '<value>'
);

if ($response->bytes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                 | Type                                                      | Required                                                  | Description                                               |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| `query`                                                   | *string*                                                  | :heavy_check_mark:                                        | Bible passage reference (e.g., "John 3:16" or "43011016") |

### Response

**[?Operations\GetPassageAudioResponse](../../Models/Operations/GetPassageAudioResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\Error        | 400, 401            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getHtml

Returns Bible passage text with HTML formatting

Esv.org API Docs for `/v3/passages/html`
<https://api.esv.org/docs/passage-html/>

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use WalkerTx\Esv;
use WalkerTx\Esv\Models\Operations;

$sdk = Esv\Esv::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetPassageHtmlRequest(
    query: '<value>',
);

$response = $sdk->passages->getHtml(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetPassageHtmlRequest](../../Models/Operations/GetPassageHtmlRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetPassageHtmlResponse](../../Models/Operations/GetPassageHtmlResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\Error        | 400, 401            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getText

Returns Bible passage text based on the provided query parameters

Esv.org API Docs for `/v3/passages/text`
<https://api.esv.org/docs/passage-text/>

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use WalkerTx\Esv;
use WalkerTx\Esv\Models\Operations;

$sdk = Esv\Esv::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetPassageTextRequest(
    query: '<value>',
);

$response = $sdk->passages->getText(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetPassageTextRequest](../../Models/Operations/GetPassageTextRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetPassageTextResponse](../../Models/Operations/GetPassageTextResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\Error        | 400, 401            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## search

Returns search results for Bible passages based on the provided query

Esv.org API Docs for `/v3/passage/search`
<https://api.esv.org/docs/passage-search/>

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use WalkerTx\Esv;

$sdk = Esv\Esv::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$responses = $sdk->passages->search(
    query: '<value>',
    pageSize: 20,
    page: 1

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                            | Type                                 | Required                             | Description                          |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `query`                              | *string*                             | :heavy_check_mark:                   | The text to search for               |
| `pageSize`                           | *?int*                               | :heavy_minus_sign:                   | Number of results to return per page |
| `page`                               | *?int*                               | :heavy_minus_sign:                   | Page number to return                |

### Response

**[?Operations\SearchPassagesResponse](../../Models/Operations/SearchPassagesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\Error        | 400, 401            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |