# Passages

## Overview

### Available Operations

* [getHtml](#gethtml) - Get Bible passage HTML
* [search](#search) - Search Bible passages
* [getAudio](#getaudio) - Get Bible passage audio
* [getText](#gettext) - Get Bible passage text

## getHtml

Returns Bible passage text with HTML formatting

Esv.org API Docs for `/v3/passages/html`
<https://api.esv.org/docs/passage-html/>

### Example Usage: ChapterRange

<!-- UsageSnippet language="php" operationID="getPassageHtml" method="get" path="/passage/html/" example="ChapterRange" -->
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
    query: 'Genesis 1-3',
);

$response = $sdk->passages->getHtml(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```
### Example Usage: CompactNotation

<!-- UsageSnippet language="php" operationID="getPassageHtml" method="get" path="/passage/html/" example="CompactNotation" -->
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
    query: 'jn11.35',
);

$response = $sdk->passages->getHtml(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```
### Example Usage: DigitalRange

<!-- UsageSnippet language="php" operationID="getPassageHtml" method="get" path="/passage/html/" example="DigitalRange" -->
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
    query: '01001001-01011032',
);

$response = $sdk->passages->getHtml(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```
### Example Usage: MultiReference

<!-- UsageSnippet language="php" operationID="getPassageHtml" method="get" path="/passage/html/" example="MultiReference" -->
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
    query: 'John1.1;Genesis1.1',
);

$response = $sdk->passages->getHtml(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```
### Example Usage: NumericalEncoding

<!-- UsageSnippet language="php" operationID="getPassageHtml" method="get" path="/passage/html/" example="NumericalEncoding" -->
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
    query: '43011035',
);

$response = $sdk->passages->getHtml(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```
### Example Usage: StandardReference

<!-- UsageSnippet language="php" operationID="getPassageHtml" method="get" path="/passage/html/" example="StandardReference" -->
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
    query: 'John 1:1',
);

$response = $sdk->passages->getHtml(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```
### Example Usage: StructuredDigital

<!-- UsageSnippet language="php" operationID="getPassageHtml" method="get" path="/passage/html/" example="StructuredDigital" -->
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
    query: '19001001-19001006,19003001-19003008',
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

## search

Returns search results for Bible passages based on the provided query

Esv.org API Docs for `/v3/passage/search`
<https://api.esv.org/docs/passage-search/>

### Example Usage

<!-- UsageSnippet language="php" operationID="searchPassages" method="get" path="/passage/search/" -->
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

## getAudio

Returns audio file for Bible passages based on the provided query

Esv.org API Docs for `/v3/passage/audio`
<https://api.esv.org/docs/passage-audio/>

### Example Usage: ChapterRange

<!-- UsageSnippet language="php" operationID="getPassageAudio" method="get" path="/passage/audio/" example="ChapterRange" -->
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
    query: 'Genesis 1-3'
);

if ($response->bytes !== null) {
    // handle response
}
```
### Example Usage: CompactNotation

<!-- UsageSnippet language="php" operationID="getPassageAudio" method="get" path="/passage/audio/" example="CompactNotation" -->
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
    query: 'jn11.35'
);

if ($response->bytes !== null) {
    // handle response
}
```
### Example Usage: DigitalRange

<!-- UsageSnippet language="php" operationID="getPassageAudio" method="get" path="/passage/audio/" example="DigitalRange" -->
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
    query: '01001001-01011032'
);

if ($response->bytes !== null) {
    // handle response
}
```
### Example Usage: MultiReference

<!-- UsageSnippet language="php" operationID="getPassageAudio" method="get" path="/passage/audio/" example="MultiReference" -->
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
    query: 'John1.1;Genesis1.1'
);

if ($response->bytes !== null) {
    // handle response
}
```
### Example Usage: NumericalEncoding

<!-- UsageSnippet language="php" operationID="getPassageAudio" method="get" path="/passage/audio/" example="NumericalEncoding" -->
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
    query: '43011035'
);

if ($response->bytes !== null) {
    // handle response
}
```
### Example Usage: StandardReference

<!-- UsageSnippet language="php" operationID="getPassageAudio" method="get" path="/passage/audio/" example="StandardReference" -->
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
    query: 'John 1:1'
);

if ($response->bytes !== null) {
    // handle response
}
```
### Example Usage: StructuredDigital

<!-- UsageSnippet language="php" operationID="getPassageAudio" method="get" path="/passage/audio/" example="StructuredDigital" -->
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
    query: '19001001-19001006,19003001-19003008'
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

## getText

Returns Bible passage text based on the provided query parameters

Esv.org API Docs for `/v3/passages/text`
<https://api.esv.org/docs/passage-text/>

### Example Usage: ChapterRange

<!-- UsageSnippet language="php" operationID="getPassageText" method="get" path="/passage/text/" example="ChapterRange" -->
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
    query: 'Genesis 1-3',
);

$response = $sdk->passages->getText(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```
### Example Usage: CompactNotation

<!-- UsageSnippet language="php" operationID="getPassageText" method="get" path="/passage/text/" example="CompactNotation" -->
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
    query: 'jn11.35',
);

$response = $sdk->passages->getText(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```
### Example Usage: DigitalRange

<!-- UsageSnippet language="php" operationID="getPassageText" method="get" path="/passage/text/" example="DigitalRange" -->
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
    query: '01001001-01011032',
);

$response = $sdk->passages->getText(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```
### Example Usage: MultiReference

<!-- UsageSnippet language="php" operationID="getPassageText" method="get" path="/passage/text/" example="MultiReference" -->
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
    query: 'John1.1;Genesis1.1',
);

$response = $sdk->passages->getText(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```
### Example Usage: NumericalEncoding

<!-- UsageSnippet language="php" operationID="getPassageText" method="get" path="/passage/text/" example="NumericalEncoding" -->
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
    query: '43011035',
);

$response = $sdk->passages->getText(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```
### Example Usage: StandardReference

<!-- UsageSnippet language="php" operationID="getPassageText" method="get" path="/passage/text/" example="StandardReference" -->
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
    query: 'John 1:1',
);

$response = $sdk->passages->getText(
    request: $request
);

if ($response->passageResponse !== null) {
    // handle response
}
```
### Example Usage: StructuredDigital

<!-- UsageSnippet language="php" operationID="getPassageText" method="get" path="/passage/text/" example="StructuredDigital" -->
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
    query: '19001001-19001006,19003001-19003008',
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