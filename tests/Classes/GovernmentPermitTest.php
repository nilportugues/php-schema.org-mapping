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

use NilPortugues\SchemaOrg\Classes\GovernmentPermit;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GovernmentPermitTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class GovernmentPermitTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(GovernmentPermit::schemaUrl(), "http://schema.org/GovernmentPermit");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::image());
    }

    public function testIssuedByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::issuedBy());
    }

    public function testIssuedThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::issuedThrough());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::name());
    }

    public function testPermitAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::permitAudience());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::url());
    }

    public function testValidForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::validFor());
    }

    public function testValidFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::validFrom());
    }

    public function testValidInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::validIn());
    }

    public function testValidUntilWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentPermit::validUntil());
    }
}