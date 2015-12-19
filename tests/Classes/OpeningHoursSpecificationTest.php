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

use NilPortugues\SchemaOrg\Classes\OpeningHoursSpecification;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OpeningHoursSpecificationTest.
 */
class OpeningHoursSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(OpeningHoursSpecification::schemaUrl(), 'http://schema.org/OpeningHoursSpecification');
    }

    public function testClosesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OpeningHoursSpecification::closes());
    }

    public function testDayOfWeekWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OpeningHoursSpecification::dayOfWeek());
    }

    public function testOpensWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OpeningHoursSpecification::opens());
    }

    public function testValidFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OpeningHoursSpecification::validFrom());
    }

    public function testValidThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OpeningHoursSpecification::validThrough());
    }
}
