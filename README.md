# nSlug
Yet another unicode slug generator library.

## Usage
```php
use NSlug\SlugGenerator;

$options = [
    'limit'     => null,
    'delimiter' => '-',
    'lowercase' => true,
];

$slugGenerator = new SlugGenerator($options);

// English strings.
echo $slugGenerator->generate('Hello World'); // Prints 'hello-world'.
echo $slugGenerator->generate('Life is too short!'); // Prints 'life-is-too-short'.

// Arabic strings.
echo $slugGenerator->generate('صباح جميل'); // Prints 'صباح جميل'.
```

## Options

- `limit` int|null The characters limit to truncate, default `null`.
- `delimiter` string The delimiter, default `-`.
- `lowercase` bool Convert to lower-case?, default `true`.

## Installation

The supported way of installing nSlug is via Composer.

```sh
$ composer require nash-ye/nslug
```

## Requirements
nSlug requires PHP 5.5+.
