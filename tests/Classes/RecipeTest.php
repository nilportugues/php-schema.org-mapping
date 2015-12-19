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

use NilPortugues\SchemaOrg\Classes\Recipe;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes RecipeTest.
 */
class RecipeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Recipe::schemaUrl(), 'http://schema.org/Recipe');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::alternateName());
    }

    public function testCookTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::cookTime());
    }

    public function testCookingMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::cookingMethod());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::image());
    }

    public function testIngredientsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::ingredients());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::name());
    }

    public function testNutritionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::nutrition());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::potentialAction());
    }

    public function testPrepTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::prepTime());
    }

    public function testRecipeCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::recipeCategory());
    }

    public function testRecipeCuisineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::recipeCuisine());
    }

    public function testRecipeIngredientWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::recipeIngredient());
    }

    public function testRecipeInstructionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::recipeInstructions());
    }

    public function testRecipeYieldWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::recipeYield());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::sameAs());
    }

    public function testTotalTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::totalTime());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Recipe::url());
    }
}
