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

use NilPortugues\SchemaOrg\Classes\InviteAction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes InviteActionTest.
 */
class InviteActionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(InviteAction::schemaUrl(), 'http://schema.org/InviteAction');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InviteAction::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InviteAction::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InviteAction::description());
    }

    public function testEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InviteAction::event());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InviteAction::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InviteAction::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InviteAction::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InviteAction::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InviteAction::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InviteAction::url());
    }
}
