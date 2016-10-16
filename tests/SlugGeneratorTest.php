<?php
/**
 * @package NSlug
 * @since 0.1
 */
namespace NSlug\Tests;

use NSlug\SlugGenerator;
use PHPUnit\Framework\TestCase;

/**
 * @since 0.1
 */
class SlugGeneratorTest extends TestCase
{
    /**
     * @return void
     * @since 0.1
     */
    public function testEnglishStrings()
    {
        $slugGenerator = new SlugGenerator();

        $this->assertEquals('hello-world', $slugGenerator->generate('Hello World'));
        $this->assertEquals('hello-world-everyday', $slugGenerator->generate('Hello World, Everyday!'));
        $this->assertEquals('hello-nashwan-doaqan', $slugGenerator->generate('Hello "Nashwan Doaqan"'));
        $this->assertEquals('hello-world', $slugGenerator->generate('Hello (World)'));
        $this->assertEquals('hello-world-123', $slugGenerator->generate('Hello (World), 123'));
        $this->assertEquals('hello-world', $slugGenerator->generate('--Hello-World---'));
        $this->assertEquals('hello-world', $slugGenerator->generate('Hello #World'));
    }

    /**
     * @return void
     * @since 0.1
     */
    public function testArabicStrings()
    {
        $slugGenerator = new SlugGenerator();

        $this->assertEquals('نشوان-دعقان', $slugGenerator->generate('نشوان دعقان'));
        $this->assertEquals('تفاح-ومشمش', $slugGenerator->generate('تفاح ومشمش'));
        $this->assertEquals('عالم-جميل', $slugGenerator->generate('عالم (جميل)'));
    }
}
