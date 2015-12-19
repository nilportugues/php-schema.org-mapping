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
 * @method static \NilPortugues\SchemaOrg\Properties\AcquiredFromProperty acquiredFrom()
 * @method static \NilPortugues\SchemaOrg\Properties\OwnedFromProperty ownedFrom()
 * @method static \NilPortugues\SchemaOrg\Properties\OwnedThroughProperty ownedThrough()
 * @method static \NilPortugues\SchemaOrg\Properties\TypeOfGoodProperty typeOfGood()
 * METHODEND.
 *
 * A structured value providing information about when a certain organization or person owned a certain product.
 */
class OwnershipInfo extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/OwnershipInfo';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'acquiredFrom' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AcquiredFromProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OwnershipInfo',
        ],
        'ownedFrom' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OwnedFromProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OwnershipInfo',
        ],
        'ownedThrough' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OwnedThroughProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OwnershipInfo',
        ],
        'typeOfGood' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TypeOfGoodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OwnershipInfo',
        ],
    ];
}
