<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Book;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BookTest.
 */
class BookTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Book::schemaUrl(), 'http://schema.org/Book');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::alternateName());
    }

    public function testBookEditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::bookEdition());
    }

    public function testBookFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::bookFormat());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::description());
    }

    public function testIllustratorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::illustrator());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::image());
    }

    public function testIsbnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::isbn());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::name());
    }

    public function testNumberOfPagesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::numberOfPages());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Book::url());
    }
}
