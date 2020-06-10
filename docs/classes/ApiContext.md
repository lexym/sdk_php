# APIContext

`APIContext` represents the set of client identifiers that you need to pass with API calls. It embraces all the below.

## Functions

### `create()`

| Parameter  | Type | Description | 
| ------------- | ------------- | ------------- |
| `$environmentType` | BunqEnumApiEnvironmentType* | `SANDBOX` or `PRODUCTION` |
| `$apiKey` | string* | Your API key |
| `$description` | string* | Your device description |
| `$allPermittedIp` | array (or string[]?) | List the expected IPs of this device in the `['0.0.0.0']` format or leave empty to use the current IP. |
| `$proxyUrl` | string|null | Add a proxy URL or ignore it.|

```
    public static function create(
        BunqEnumApiEnvironmentType $environmentType,
        string $apiKey,
        string $description,
        array $allPermittedIp = [],
        string $proxyUrl = null
```

### `createForPsd2()`

### `restore()`
