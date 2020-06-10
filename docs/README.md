# bunq PHP SDK Reference

Below is the API reference for the bunq SDK for PHP.

## API Context

These classes are at the core of the bunq SDK for PHP.

| Class name  | Description | 
| ------------- | ------------- |
| [`ApiContext`](https://github.com/lexym/sdk_php/blob/develop/docs/classes/ApiContext.md) or bunq\Context\ApiContext? | An entity that represents the set of client identifiers that you need to pass with API calls. It embraces all the below.|
| [`UserContext`](src/Context/UserContext.php) | An entity that represents the set of user identifiers that you can use in functions. |
| [`BunqContext`](src/Context/BunqContext.php) | An entity that loads both `ApiContext` and `UserContext`. |
| [`InstallationContext`](src/Context/InstallationContext.php) | An entity we use to store the installation values. You won't need to use it if you follow the shortcut described in the [API context manual](sdk_php#usage). |
| [`SessionContext`](src/Context/SessionContext.php) | An entity we use to store the session token variable. You won't need to use it if you follow the shortcut described in the [API context manual](sdk_php#usage). |
