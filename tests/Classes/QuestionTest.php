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

use NilPortugues\SchemaOrg\Classes\Question;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes QuestionTest.
 */
class QuestionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Question::schemaUrl(), 'http://schema.org/Question');
    }

    public function testAcceptedAnswerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::acceptedAnswer());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::alternateName());
    }

    public function testAnswerCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::answerCount());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::description());
    }

    public function testDownvoteCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::downvoteCount());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::sameAs());
    }

    public function testSuggestedAnswerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::suggestedAnswer());
    }

    public function testUpvoteCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::upvoteCount());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Question::url());
    }
}
