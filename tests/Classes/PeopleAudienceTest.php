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

use NilPortugues\SchemaOrg\Classes\PeopleAudience;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PeopleAudienceTest.
 */
class PeopleAudienceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PeopleAudience::schemaUrl(), 'http://schema.org/PeopleAudience');
    }

    public function testHealthConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::healthCondition());
    }

    public function testRequiredGenderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::requiredGender());
    }

    public function testRequiredMaxAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::requiredMaxAge());
    }

    public function testRequiredMinAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::requiredMinAge());
    }

    public function testSuggestedGenderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::suggestedGender());
    }

    public function testSuggestedMaxAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::suggestedMaxAge());
    }

    public function testSuggestedMinAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::suggestedMinAge());
    }
}
