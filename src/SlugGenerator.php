<?php
/**
 * Slug generator class file.
 *
 * @package NSlug
 * @since 0.1
 */
namespace NSlug;

/**
 * Slug generator.
 *
 * @since 0.1
 */
class SlugGenerator
{
    /**
     * Generator options.
     *
     * @var array
     * @since 0.1
     */
    protected $options = [];

    /**
     * Generator constructor.
     *
     * @since 0.1
     */
    public function __construct(array $options = [])
    {
        $defaults = [
            'limit'     => null,
            'delimiter' => '-',
            'lowercase' => true,
        ];

        $this->options = array_merge($defaults, $options);
    }

    /**
     * Generate a nice slug from a string.
     *
     * @see http://iamseanmurphy.com/creating-seo-friendly-urls-in-php-with-url-slug/
     * @param string $str
     * @return string
     * @since 0.1
     */
    public function generate($str)
    {
        $str = (string) $str;

        // Make sure string is in UTF-8.
        $str = mb_convert_encoding($str, 'UTF-8');

        // Replace non-alphanumeric characters with our delimiter.
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $this->options['delimiter'], $str);

        // Remove duplicate delimiters.
        $str = preg_replace('/(' . preg_quote($this->options['delimiter'], '/') . '){2,}/', '$1', $str);

        if ($this->options['limit']) {
            // Truncate slug.
            $str = mb_substr($str, 0, (int) $this->options['limit'], 'UTF-8');
        }

        $str = trim($str, $this->options['delimiter']);

        if ($this->options['lowercase']) {
            // Convert to lowercase.
            $str = mb_strtolower($str, 'UTF-8');
        }

        return $str;
    }
}
