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
 * @method static \NilPortugues\SchemaOrg\Properties\CaloriesProperty calories()
 * @method static \NilPortugues\SchemaOrg\Properties\CarbohydrateContentProperty carbohydrateContent()
 * @method static \NilPortugues\SchemaOrg\Properties\CholesterolContentProperty cholesterolContent()
 * @method static \NilPortugues\SchemaOrg\Properties\FatContentProperty fatContent()
 * @method static \NilPortugues\SchemaOrg\Properties\FiberContentProperty fiberContent()
 * @method static \NilPortugues\SchemaOrg\Properties\ProteinContentProperty proteinContent()
 * @method static \NilPortugues\SchemaOrg\Properties\SaturatedFatContentProperty saturatedFatContent()
 * @method static \NilPortugues\SchemaOrg\Properties\ServingSizeProperty servingSize()
 * @method static \NilPortugues\SchemaOrg\Properties\SodiumContentProperty sodiumContent()
 * @method static \NilPortugues\SchemaOrg\Properties\SugarContentProperty sugarContent()
 * @method static \NilPortugues\SchemaOrg\Properties\TransFatContentProperty transFatContent()
 * @method static \NilPortugues\SchemaOrg\Properties\UnsaturatedFatContentProperty unsaturatedFatContent()
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
 * Nutritional information about the recipe.
 */
class NutritionInformation extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/NutritionInformation';

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
        'calories' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CaloriesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'carbohydrateContent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CarbohydrateContentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'cholesterolContent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CholesterolContentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'fatContent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FatContentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'fiberContent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FiberContentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'proteinContent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProteinContentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'saturatedFatContent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SaturatedFatContentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'servingSize' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServingSizeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'sodiumContent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SodiumContentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'sugarContent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SugarContentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'transFatContent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TransFatContentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'unsaturatedFatContent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UnsaturatedFatContentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
