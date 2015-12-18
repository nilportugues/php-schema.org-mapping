<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\CookTime;
use NilPortugues\SchemaOrg\Properties\CookingMethod;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\Ingredients;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\Nutrition;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\PrepTime;
use NilPortugues\SchemaOrg\Properties\RecipeCategory;
use NilPortugues\SchemaOrg\Properties\RecipeCuisine;
use NilPortugues\SchemaOrg\Properties\RecipeIngredient;
use NilPortugues\SchemaOrg\Properties\RecipeInstructions;
use NilPortugues\SchemaOrg\Properties\RecipeYield;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\TotalTime;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes Recipe
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A recipe.
 */
class Recipe
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Recipe";

   /**
    * Returns the URL of the current definition at http://schema.org
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
        return AdditionalType::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function alternateName()
    {
        return AlternateName::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function cookTime()
    {
        return CookTime::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function cookingMethod()
    {
        return CookingMethod::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function description()
    {
        return Description::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function image()
    {
        return Image::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function ingredients()
    {
        return Ingredients::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPage::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function name()
    {
        return Name::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function nutrition()
    {
        return Nutrition::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function potentialAction()
    {
        return PotentialAction::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function prepTime()
    {
        return PrepTime::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function recipeCategory()
    {
        return RecipeCategory::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function recipeCuisine()
    {
        return RecipeCuisine::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function recipeIngredient()
    {
        return RecipeIngredient::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function recipeInstructions()
    {
        return RecipeInstructions::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function recipeYield()
    {
        return RecipeYield::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function sameAs()
    {
        return SameAs::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function totalTime()
    {
        return TotalTime::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}