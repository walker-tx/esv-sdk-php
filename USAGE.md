<!-- Start SDK Example Usage [usage] -->
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