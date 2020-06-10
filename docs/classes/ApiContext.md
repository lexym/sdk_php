# APIContext

`APIContext` represents the set of client identifiers that you need to pass with API calls. It embraces all the below.

## Functions

### `create()`

The function creates an API context 

| Parameter  | Type | Description | 
| ------------- | ------------- | ------------- |
| `$environmentType` | BunqEnumApiEnvironmentType* | `SANDBOX` or `PRODUCTION` |
| `$apiKey` | string* | Your API key |
| `$description` | string* | Your device description |
| `$allPermittedIp` | array (or string[]?) | List the expected IPs of this device in the `['0.0.0.0']` format or leave empty to use the current IP. |
| `$proxyUrl` | string|null | Add a proxy URL or ignore it.|

#### Example

```php
<?php
use bunq\Context\ApiContext;
use bunq\Util\BunqEnumApiEnvironmentType;

$environmentType = BunqEnumApiEnvironmentType::SANDBOX();
$apiKey = '### Your API Key ###';
$deviceDescription = '### Your device description ###';
$permittedIps = ['0.0.0.0'];

$apiContext = ApiContext::create(
    $environmentType,
    $apiKey,
    $deviceDescription,
    $permittedIps
);

BunqContext::loadApiContext($apiContext);
```

### `createForPsd2()`

### `restore()`
