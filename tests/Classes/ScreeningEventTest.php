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

use NilPortugues\SchemaOrg\Classes\ScreeningEvent;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ScreeningEventTest.
 */
class ScreeningEventTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ScreeningEvent::schemaUrl(), 'http://schema.org/ScreeningEvent');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ScreeningEvent::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ScreeningEvent::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ScreeningEvent::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ScreeningEvent::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ScreeningEvent::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ScreeningEvent::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ScreeningEvent::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ScreeningEvent::sameAs());
    }

    public function testSubtitleLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ScreeningEvent::subtitleLanguage());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ScreeningEvent::url());
    }

    public function testVideoFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ScreeningEvent::videoFormat());
    }

    public function testWorkPresentedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ScreeningEvent::workPresented());
    }
}
