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

use NilPortugues\SchemaOrg\Classes\QualitativeValue;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes QualitativeValueTest.
 */
class QualitativeValueTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(QualitativeValue::schemaUrl(), 'http://schema.org/QualitativeValue');
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QualitativeValue::additionalProperty());
    }

    public function testEqualWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QualitativeValue::equal());
    }

    public function testGreaterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QualitativeValue::greater());
    }

    public function testGreaterOrEqualWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QualitativeValue::greaterOrEqual());
    }

    public function testLesserWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QualitativeValue::lesser());
    }

    public function testLesserOrEqualWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QualitativeValue::lesserOrEqual());
    }

    public function testNonEqualWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QualitativeValue::nonEqual());
    }

    public function testValueReferenceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QualitativeValue::valueReference());
    }
}
