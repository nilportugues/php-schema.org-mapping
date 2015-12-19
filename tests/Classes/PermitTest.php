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

use NilPortugues\SchemaOrg\Classes\Permit;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PermitTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PermitTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Permit::schemaUrl(), "http://schema.org/Permit");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::image());
    }

    public function testIssuedByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::issuedBy());
    }

    public function testIssuedThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::issuedThrough());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::name());
    }

    public function testPermitAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::permitAudience());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::url());
    }

    public function testValidForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::validFor());
    }

    public function testValidFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::validFrom());
    }

    public function testValidInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::validIn());
    }

    public function testValidUntilWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Permit::validUntil());
    }
}