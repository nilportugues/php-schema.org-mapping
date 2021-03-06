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

use NilPortugues\SchemaOrg\Classes\BorrowAction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BorrowActionTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BorrowActionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BorrowAction::schemaUrl(), "http://schema.org/BorrowAction");
    }

    public function testActionStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::actionStatus());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::additionalType());
    }

    public function testAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::agent());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::description());
    }

    public function testEndTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::endTime());
    }

    public function testErrorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::error());
    }

    public function testFromLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::fromLocation());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::image());
    }

    public function testInstrumentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::instrument());
    }

    public function testLenderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::lender());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::location());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::name());
    }

    public function testObjectTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::objectType());
    }

    public function testParticipantWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::participant());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::potentialAction());
    }

    public function testResultWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::result());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::sameAs());
    }

    public function testStartTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::startTime());
    }

    public function testTargetWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::target());
    }

    public function testToLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::toLocation());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BorrowAction::url());
    }
}