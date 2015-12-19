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
 * @method static \NilPortugues\SchemaOrg\Properties\FuelTypeProperty fuelType()
 * METHODEND.
 *
 * Information about the engine of the vehicle. A vehicle can have multiple engines represented by multiple engine specification entities.
 */
class EngineSpecification extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/EngineSpecification';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'fuelType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FuelTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\EngineSpecification',
        ],
    ];
}
