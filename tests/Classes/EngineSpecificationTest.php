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

use NilPortugues\SchemaOrg\Classes\EngineSpecification;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes EngineSpecificationTest.
 */
class EngineSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(EngineSpecification::schemaUrl(), 'http://schema.org/EngineSpecification');
    }

    public function testFuelTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EngineSpecification::fuelType());
    }
}
