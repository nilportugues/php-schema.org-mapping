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

use NilPortugues\SchemaOrg\Classes\InsertAction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes InsertActionTest.
 */
class InsertActionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(InsertAction::schemaUrl(), 'http://schema.org/InsertAction');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InsertAction::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InsertAction::alternateName());
    }

    public function testCollectionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InsertAction::collection());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InsertAction::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InsertAction::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InsertAction::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InsertAction::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InsertAction::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InsertAction::sameAs());
    }

    public function testTargetCollectionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InsertAction::targetCollection());
    }

    public function testToLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InsertAction::toLocation());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InsertAction::url());
    }
}
