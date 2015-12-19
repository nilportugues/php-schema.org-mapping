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
 * @method static \NilPortugues\SchemaOrg\Properties\AmountOfThisGoodProperty amountOfThisGood()
 * @method static \NilPortugues\SchemaOrg\Properties\BusinessFunctionProperty businessFunction()
 * @method static \NilPortugues\SchemaOrg\Properties\TypeOfGoodProperty typeOfGood()
 * @method static \NilPortugues\SchemaOrg\Properties\UnitCodeProperty unitCode()
 * @method static \NilPortugues\SchemaOrg\Properties\UnitTextProperty unitText()
 * METHODEND.
 *
 * A structured value indicating the quantity, unit of measurement, and business function of goods included in a bundle offer.
 */
class TypeAndQuantityNode extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/TypeAndQuantityNode';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'amountOfThisGood' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AmountOfThisGoodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TypeAndQuantityNode',
        ],
        'businessFunction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BusinessFunctionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TypeAndQuantityNode',
        ],
        'typeOfGood' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TypeOfGoodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TypeAndQuantityNode',
        ],
        'unitCode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UnitCodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TypeAndQuantityNode',
        ],
        'unitText' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UnitTextProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TypeAndQuantityNode',
        ],
    ];
}
