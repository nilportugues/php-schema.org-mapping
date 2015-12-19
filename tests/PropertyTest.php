<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/19/15
 * Time: 12:37 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg;

use NilPortugues\SchemaOrg\InvalidSchemaPropertyException;
use NilPortugues\SchemaOrg\Mapping;

class PropertyTest extends \PHPUnit_Framework_TestCase
{
    public function testItWillCreate()
    {
        $dummyProperty = DummyProperty::create('ItWorks');
        $this->assertInstanceOf(Mapping::class, $dummyProperty);
    }

    public function testItWillThrowExceptionWhenClassNotSupported()
    {
        $this->setExpectedException(InvalidSchemaPropertyException::class);
        DummyProperty::create('I Will Fail Miserably');
    }
}
 