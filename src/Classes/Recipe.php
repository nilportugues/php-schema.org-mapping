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

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\CookTimeProperty;
use NilPortugues\SchemaOrg\Properties\CookingMethodProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\IngredientsProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\NutritionProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\PrepTimeProperty;
use NilPortugues\SchemaOrg\Properties\RecipeCategoryProperty;
use NilPortugues\SchemaOrg\Properties\RecipeCuisineProperty;
use NilPortugues\SchemaOrg\Properties\RecipeIngredientProperty;
use NilPortugues\SchemaOrg\Properties\RecipeInstructionsProperty;
use NilPortugues\SchemaOrg\Properties\RecipeYieldProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\TotalTimeProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;

/**
 * Classes Recipe.
 */
class Recipe
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Recipe';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

    /**
     * @return Mapping
     */
    public static function additionalType()
    {
        return AdditionalTypeProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternateName()
    {
        return AlternateNameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function cookTime()
    {
        return CookTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function cookingMethod()
    {
        return CookingMethodProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function description()
    {
        return DescriptionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function ingredients()
    {
        return IngredientsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function name()
    {
        return NameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function nutrition()
    {
        return NutritionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function potentialAction()
    {
        return PotentialActionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function prepTime()
    {
        return PrepTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recipeCategory()
    {
        return RecipeCategoryProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recipeCuisine()
    {
        return RecipeCuisineProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recipeIngredient()
    {
        return RecipeIngredientProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recipeInstructions()
    {
        return RecipeInstructionsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recipeYield()
    {
        return RecipeYieldProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sameAs()
    {
        return SameAsProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function totalTime()
    {
        return TotalTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
