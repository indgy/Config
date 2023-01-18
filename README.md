# Config

Simple array config access

## Install

Install this package via composer:

```sh
composer install ignition-studios/config
```

## Usage

Config expects an associative array as the constructor input.

It has one method which will return the value of the specified key.

```php
$config = new Config([
    "api" => [
        "user" => "Alex",
        "pass" => "sEcReT",
    ],
    "theme" => "dark",
]);

$config->get("theme");
<!-- dark -->

$config->get("api");
<!--
[
    "user" => "Alex",
    "pass" => "sEcReT",
]
-->
```

The `get()` method will return a default value if the key is not found

```php
$config->get("size", "medium");
<!-- medium -->
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```sh
$ make test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Ian Grindley](https://ignition-studios.com)

## License

### Proprietary

The code in this repository is proprietary, unauthorised reproduction or distribution is forbidden.
Written authorisation may only be granted by a Director of Ignition Studios Ltd.
