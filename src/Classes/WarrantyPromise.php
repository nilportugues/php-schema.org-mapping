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
 * @method static \NilPortugues\SchemaOrg\Properties\DurationOfWarrantyProperty durationOfWarranty()
 * @method static \NilPortugues\SchemaOrg\Properties\WarrantyScopeProperty warrantyScope()
 * METHODEND.
 *
 * A structured value representing the duration and scope of services that will be provided to a customer free of charge in case of a defect or malfunction of a product.
 */
class WarrantyPromise extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/WarrantyPromise';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'durationOfWarranty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DurationOfWarrantyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\WarrantyPromise',
        ],
        'warrantyScope' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WarrantyScopeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\WarrantyPromise',
        ],
    ];
}
