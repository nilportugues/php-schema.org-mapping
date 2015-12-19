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

use NilPortugues\SchemaOrg\Classes\InteractionCounter;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes InteractionCounterTest.
 */
class InteractionCounterTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(InteractionCounter::schemaUrl(), 'http://schema.org/InteractionCounter');
    }

    public function testInteractionServiceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::interactionService());
    }

    public function testInteractionTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::interactionType());
    }

    public function testUserInteractionCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::userInteractionCount());
    }
}
