# Countries

This package is a user-friendly Laravel package that provides a list of countries along with their codes, flags, phone number lengths, and shortcodes. It simplifies the process of accessing country-related information, making it easy for developers to integrate into their applications.

- [Countries](#countries)
  - [Installation](#installation)
  - [Usage](#usage)
    - [Get all countries](#get-all-countries)
    - [Get a specific country by name](#get-a-specific-country-by-name)
    - [Get a specific country by code](#get-a-specific-country-by-code)
    - [Get a specific country by dial code](#get-a-specific-country-by-dial-code)
    - [Get the validator rules for a country by code](#get-the-validator-rules-for-a-country-by-code)
    - [Get the validator rules for a country by dial code](#get-the-validator-rules-for-a-country-by-dial-code)
  - [Troubleshooting and Data Correction](#troubleshooting-and-data-correction)

## Installation

To install the package, use the following command:

```bash
composer require nakanakaii/countries
```

Also, publish the flags to your application's public folder.

```bash
php artisan vendor:publish --tag=countries-flags
```

Finally, you can import it in your code:

```php
use Nakanakaii\Countries\Countries;
```

## Usage

### Get all countries

To retrieve a list of all countries, use the following code:

```php
Countries::all()
```

The `all()` method returns an array of country objects, each containing the following information:

- `name`: The name of the country.
- `code`: The ISO 3166-1 alpha-2 code of the country.
- `flag`: The flag of the country as Emoji.
- `minLength`: The minimum length of the phone number.
- `maxLength`: The maximum length of the phone number.
- `shortcode`: The shortcode or abbreviation for the country.

### Get a specific country by name

To find a specific country by its name, use the `findByName()` method:

```php
Countries::findByName('United Arab Emirates')
```

The `findByName()` method accepts the country name as a parameter and returns the country object that matches the provided name.

### Get a specific country by code

To find a specific country by its code, use the `findByCode()` method:

```php
Countries::findByCode('AE')
```

The `findByCode()` method accepts the country code (ISO 3166-1 alpha-2 code) as a parameter and returns the country object that matches the provided code.

### Get a specific country by dial code

To find a specific country by its dial code, use the `findByDialCode()` method:

```php
Countries::findByDialCode('971')
```

The `findByDialCode()` method accepts the country dial code as a parameter and returns the country object that matches the provided dial code.

### Get the validator rules for a country by code

To retrieve the validator rules for a specific country by its code, use the `getPhoneValidatorByCode()` method:

```php
Countries::getPhoneValidatorByCode('AE')
```

### Get the validator rules for a country by dial code

To retrieve the validator rules for a specific country by its dial code, use the `getPhoneValidatorByDialCode()` method:

```php
Countries::getPhoneValidatorByDialCode('971')
```

The `getPhoneValidatorByDialCode()` method accepts the country dial code as a parameter and returns the validator rules for phone numbers in that country.

> NOTE: The validator rules returned by the getPhoneValidatorByCode() and getPhoneValidatorByDialCode() methods are in the form of regular expressions that can be used for phone number validation.

_________________________________________________

Feel free to explore the package and utilize the provided methods according to your application's requirements.

## Troubleshooting and Data Correction

If you encounter any issues or have any suggestions or find any incorrect or missing data, please feel free to [open an issue](https://github.com/nakanakaii/countries/issues/new/choose) on GitHub.
