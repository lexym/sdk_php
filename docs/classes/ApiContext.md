# APIContext

`APIContext` represents the set of client identifiers that you need to pass with API calls. 

**TIP:** both saving and restoring the context can be done without any arguments. In this case the context will be saved to/restored from the bunq.conf file in the same folder with your script.

## Functions

### `create()`

The function creates an API context that helps bunq verify the API calls are sent by you. It sends POST requests to  `/installation`, `/device-server`, and `/session-server` and returns the new $apiContext static. See the [bunq API reference](https://doc.bunq.com/) for the details.

| Parameter  | Type | Description | 
| ------------- | ------------- | ------------- |
| `$environmentType` | BunqEnumApiEnvironmentType* | `SANDBOX` or `PRODUCTION` |
| `$apiKey` | string* | Your API key |
| `$description` | string* | Your device description |
| `$allPermittedIp` | array (or string[]?) | List the expected IPs of this device in the `['0.0.0.0']` format or leave empty to use the current IP. |
| `$proxyUrl` | string|null | Add a proxy URL in the `'socks5://localhost:1080'` format or ignore it.|

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

You can create a userPaymentServiceProvider using the bunq API. API conext for PSD2 users requires addiional parameters. The function creates an API context that helps bunq verify the API calls are sent by the PSD2-certified party. It sends POST requests to `/installation`, `/payment-service-provider-credential`,`/device-server`, and `/session-server` and returns the new $apiContext static. See the [bunq API reference](https://doc.bunq.com/) for the details.

| Parameter  | Type | Description | 
| ------------- | ------------- | ------------- |
| `$environmentType` | BunqEnumApiEnvironmentType* | `SANDBOX` or `PRODUCTION` |
| `$publicCertificate` | Certificate* | Your eIDAS certificate |
| `$privateKey` | PrivateKey* | Your API key |
| `$description` | string* | Your device description |
| `$allPermittedIp` | array (or string[]?) | List the expected IPs of this device in the `['0.0.0.0']` format or leave empty to use the current IP. |
| `$proxyUrl` | string|null | Add a proxy URL in the `'socks5://localhost:1080'` format or ignore it.|

#### Example
```php
$apiContext = ApiContext::createForPsd2(
    BunqEnumApiEnvironmentType::SANDBOX(), 
    SecurityUtil::getCertificateFromFile($pathToCertificate),
    SecurityUtil::getPrivateKeyFromFile($pathToKey),
    [
        SecurityUtil::getCertificateFromFile($pathToCertificateInChain), // Could be one file containing chain, or multiple certificate files in array.
    ],
    $description
)
```

### `restore()`

The function restores the API context you saved in a file.

**TIP:** both saving and restoring the context can be done without any arguments. In this case the context will be saved to/restored from the bunq.conf file in the same folder with your script.

| Parameter  | Type | Description | 
| ------------- | ------------- | ------------- |
| `$fileName` | string | The file from which you want restore the API context.|

#### Example
```php
$fileName = '/path/to/bunq.conf/file/';
$apiContext = ApiContext::restore($fileName);
BunqContext::loadApiContext($apiContext);
```

## Error messages

- 'Could not find the API context file "%s".';
- 'Could not save the API context to "%s".';
- 'Context not yet installed. Please finish installation first.';
- 'Context doesn\'t have a session yet. Please finish installation first.';
- 'Unexpected environment type "%s".';
