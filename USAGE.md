<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Esv;

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
<!-- End SDK Example Usage [usage] -->