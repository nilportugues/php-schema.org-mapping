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
 * Classes InteractionCounterTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class InteractionCounterTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(InteractionCounter::schemaUrl(), "http://schema.org/InteractionCounter");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::image());
    }

    public function testInteractionServiceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::interactionService());
    }

    public function testInteractionTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::interactionType());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::url());
    }

    public function testUserInteractionCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::userInteractionCount());
    }
}