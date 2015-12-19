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

use NilPortugues\SchemaOrg\Classes\OwnershipInfo;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OwnershipInfoTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class OwnershipInfoTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(OwnershipInfo::schemaUrl(), "http://schema.org/OwnershipInfo");
    }

    public function testAcquiredFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::acquiredFrom());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::name());
    }

    public function testOwnedFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::ownedFrom());
    }

    public function testOwnedThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::ownedThrough());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::sameAs());
    }

    public function testTypeOfGoodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::typeOfGood());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::url());
    }
}