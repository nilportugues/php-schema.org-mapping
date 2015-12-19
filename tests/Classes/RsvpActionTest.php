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

use NilPortugues\SchemaOrg\Classes\RsvpAction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes RsvpActionTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class RsvpActionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(RsvpAction::schemaUrl(), "http://schema.org/RsvpAction");
    }

    public function testAboutWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::about());
    }

    public function testActionStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::actionStatus());
    }

    public function testAdditionalNumberOfGuestsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::additionalNumberOfGuests());
    }

    public function testAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::agent());
    }

    public function testCommentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::comment());
    }

    public function testEndTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::endTime());
    }

    public function testErrorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::error());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::inLanguage());
    }

    public function testInstrumentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::instrument());
    }

    public function testLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::language());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::location());
    }

    public function testObjectTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::objectType());
    }

    public function testParticipantWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::participant());
    }

    public function testRecipientWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::recipient());
    }

    public function testResultWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::result());
    }

    public function testRsvpResponseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::rsvpResponse());
    }

    public function testStartTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::startTime());
    }

    public function testTargetWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RsvpAction::target());
    }
}