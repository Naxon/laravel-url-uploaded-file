# Uploade files from URLs in Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/naxon/laravel-url-uploaded-file.svg?style=flat-square)](https://packagist.org/packages/naxon/laravel-url-uploaded-file)
![Tests](https://github.com/naxon/laravel-url-uploaded-file/workflows/Tests/badge.svg?branch=main)
[![Total Downloads](https://img.shields.io/packagist/dt/naxon/laravel-url-uploaded-file.svg?style=flat-square)](https://packagist.org/packages/naxon/laravel-url-uploaded-file)

This package extends Laravel's [`UploadedFile`](https://github.com/laravel/framework/blob/8.x/src/Illuminate/Http/UploadedFile.php) functionality using file URLs instead of regular file uploads.

Read the full post in my blog: https://naxon.dev/blog/upload-files-from-urls-in-laravel

## Installation

You can install the package via composer:

```bash
composer require naxon/laravel-url-uploaded-file
```

## Usage

``` php
use Naxon\UrlUploadedFile\UrlUploadedFile;

$file = UrlUploadedFile::createFromUrl('https://naxon.dev/assets/img/portrait.jpg');
```

Now, because `UrlUploadedFile` extends `UploadedFile`, you can [store](https://laravel.com/docs/8.x/requests#storing-uploaded-files) it, get its [path and extension](https://laravel.com/docs/8.x/requests#storing-uploaded-files) and use `UploadedFile`'s functionality with it.

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Roadmap

Version 1.0 provides basic functionality only. It was extracted from a real project I was working on. The plan for version 2.0 is to extend the functionality by adding more downloaders.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Daniel Naxon](https://github.com/NaxonD)
- [Spatie](https://github.com/spatie) - On the idea of how to [download files](https://github.com/spatie/laravel-medialibrary/blob/9dc99067cb78f6902b2f70601fb62fe16ba0f7ec/src/Downloaders/DefaultDownloader.php).
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
