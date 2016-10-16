<?php
/**
 * Slug generator interface file.
 *
 * @package NSlug
 * @since 0.1.1
 */
namespace NSlug;

/**
 * Slug generator interface.
 *
 * @since 0.1.1
 */
interface SlugGeneratorInterface
{
    /**
     * Generate a nice slug from a string.
     *
     * @param string $str
     * @return string
     * @since 0.1.1
     */
    public function generate($str);
}
