# nSlug
Yet another unicode slug generator library.

## Usage
```php
use NSlug\SlugGenerator;

$slugGenerator = new SlugGenerator();
echo $slugGenerator->generate('Hello World'); // Prints 'hello-world'.
```

## Requirements
nSlug requires PHP 5.5+.
