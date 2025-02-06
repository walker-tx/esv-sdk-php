# walker-tx/esv

Developer-friendly & type-safe Php SDK specifically catered to leverage *walker-tx/esv* API.

<div align="left">
    <a href="https://www.speakeasy.com/?utm_source=walker-tx/esv&utm_campaign=php"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" style="width: 100px; height: 28px;" />
    </a>
</div>


<br /><br />
> [!IMPORTANT]
> This SDK is not yet ready for production use. To complete setup please follow the steps outlined in your [workspace](https://app.speakeasy.com/org/walker/esv). Delete this section before > publishing to a package manager.

<!-- Start Summary [summary] -->
## Summary

ESV.org API: A convenient way to fetch content from ESV.org.

The ESV API provides access to the ESV text, with a customizable presentation in  multiple formats. 

For more information about the API: [ESV API Website](https://api.esv.org/)
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents
<!-- $toc-max-depth=2 -->
* [walker-tx/esv](#walker-txesv)
  * [SDK Installation](#sdk-installation)
  * [SDK Example Usage](#sdk-example-usage)
  * [Authentication](#authentication)
  * [Available Resources and Operations](#available-resources-and-operations)
  * [Pagination](#pagination)
  * [Error Handling](#error-handling)
  * [Server Selection](#server-selection)
* [Development](#development)
  * [Maturity](#maturity)
  * [Contributions](#contributions)

<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "walker-tx/esv"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

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
<!-- End SDK Example Usage [usage] -->

<!-- Start Authentication [security] -->
## Authentication

### Per-Client Security Schemes

This SDK supports the following security scheme globally:

| Name     | Type   | Scheme  |
| -------- | ------ | ------- |
| `apiKey` | apiKey | API key |

To authenticate with the API the `apiKey` parameter must be set when initializing the SDK. For example:
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
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>


### [passages](docs/sdks/passages/README.md)

* [getAudio](docs/sdks/passages/README.md#getaudio) - Get Bible passage audio
* [getHtml](docs/sdks/passages/README.md#gethtml) - Get Bible passage HTML
* [getText](docs/sdks/passages/README.md#gettext) - Get Bible passage text
* [search](docs/sdks/passages/README.md#search) - Search Bible passages

</details>
<!-- End Available Resources and Operations [operations] -->

<!-- Start Pagination [pagination] -->
## Pagination

Some of the endpoints in this SDK support pagination. To use pagination, you make your SDK calls as usual, but the
returned object will be a `Generator` instead of an individual response.

Working with generators is as simple as iterating over the responses in a `foreach` loop, and you can see an example below:
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
<!-- End Pagination [pagination] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `Errors\APIException` exception, which has the following properties:

| Property       | Type                                    | Description           |
|----------------|-----------------------------------------|-----------------------|
| `$message`     | *string*                                | The error message     |
| `$statusCode`  | *int*                                   | The HTTP status code  |
| `$rawResponse` | *?\Psr\Http\Message\ResponseInterface*  | The raw HTTP response |
| `$body`        | *string*                                | The response content  |

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `getAudio` method throws the following exceptions:

| Error Type          | Status Code | Content Type     |
| ------------------- | ----------- | ---------------- |
| Errors\Error        | 400, 401    | application/json |
| Errors\APIException | 4XX, 5XX    | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use WalkerTx\Esv;

$sdk = Esv\Esv::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

try {
    $response = $sdk->passages->getAudio(
        query: '<value>'
    );

    if ($response->bytes !== null) {
        // handle response
    }
} catch (Errors\ErrorThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\APIException $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

### Override Server URL Per-Client

The default server can also be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use WalkerTx\Esv;

$sdk = Esv\Esv::builder()
    ->setServerURL('https://api.esv.org/v3/')
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
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically. Any manual changes added to internal files will be overwritten on the next generation. 
We look forward to hearing your feedback. Feel free to open a PR or an issue with a proof of concept and we'll do our best to include it in a future release. 

### SDK Created by [Speakeasy](https://www.speakeasy.com/?utm_source=walker-tx/esv&utm_campaign=php)
