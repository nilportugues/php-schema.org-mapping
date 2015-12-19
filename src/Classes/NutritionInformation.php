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
        'fatContent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FatContentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'fiberContent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FiberContentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
        ],
        'proteinContent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProteinContentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\NutritionInformation',
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
    ];
}
