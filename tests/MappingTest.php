<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 10:59 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg;

use NilPortugues\SchemaOrg\Mapping;

class MappingTest extends \PHPUnit_Framework_TestCase
{
    public function testGetters()
    {
        $mapping = new Mapping('http://schema.org/Thing', 'name', 'http://schema.org/name');

        $this->assertEquals('http://schema.org/Thing', $mapping->usedBy());
        $this->assertEquals('name', $mapping->name());
        $this->assertEquals('http://schema.org/name', $mapping->url());
    }
}
