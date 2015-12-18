<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 10:59 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg;


use NilPortugues\SchemaOrg\MappedProperty;

class MappedPropertyTest extends \PHPUnit_Framework_TestCase
{
    public function testFlyweightDoesNotDuplicateObjects()
    {
        $mapping1 = MappedProperty::create('http://schema.org/Thing', 'name', 'http://schema.org/name');
        $mapping2 = MappedProperty::create('http://schema.org/Thing', 'name', 'http://schema.org/name');

        $this->assertSame($mapping1, $mapping2);
    }
}
 