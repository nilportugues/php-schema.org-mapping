<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\CookingMethodProperty cookingMethod()
 * @method static \NilPortugues\SchemaOrg\Properties\CookTimeProperty cookTime()
 * @method static \NilPortugues\SchemaOrg\Properties\IngredientsProperty ingredients()
 * @method static \NilPortugues\SchemaOrg\Properties\RecipeIngredientProperty recipeIngredient()
 * @method static \NilPortugues\SchemaOrg\Properties\NutritionProperty nutrition()
 * @method static \NilPortugues\SchemaOrg\Properties\PrepTimeProperty prepTime()
 * @method static \NilPortugues\SchemaOrg\Properties\RecipeCategoryProperty recipeCategory()
 * @method static \NilPortugues\SchemaOrg\Properties\RecipeCuisineProperty recipeCuisine()
 * @method static \NilPortugues\SchemaOrg\Properties\RecipeInstructionsProperty recipeInstructions()
 * @method static \NilPortugues\SchemaOrg\Properties\RecipeYieldProperty recipeYield()
 * @method static \NilPortugues\SchemaOrg\Properties\TotalTimeProperty totalTime()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * METHODEND.
 *
 * A recipe.
 */
class Recipe extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Recipe';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'cookTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CookTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Recipe',
        ],
        'cookingMethod' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CookingMethodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Recipe',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'ingredients' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IngredientsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Recipe',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'nutrition' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NutritionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Recipe',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'prepTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PrepTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Recipe',
        ],
        'recipeCategory' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecipeCategoryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Recipe',
        ],
        'recipeCuisine' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecipeCuisineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Recipe',
        ],
        'recipeIngredient' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecipeIngredientProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Recipe',
        ],
        'recipeInstructions' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecipeInstructionsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Recipe',
        ],
        'recipeYield' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecipeYieldProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Recipe',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'totalTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TotalTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Recipe',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
