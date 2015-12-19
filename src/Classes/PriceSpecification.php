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
 * @method static \NilPortugues\SchemaOrg\Properties\EligibleQuantityProperty eligibleQuantity()
 * @method static \NilPortugues\SchemaOrg\Properties\EligibleTransactionVolumeProperty eligibleTransactionVolume()
 * @method static \NilPortugues\SchemaOrg\Properties\MaxPriceProperty maxPrice()
 * @method static \NilPortugues\SchemaOrg\Properties\MinPriceProperty minPrice()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceProperty price()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidFromProperty validFrom()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidThroughProperty validThrough()
 * @method static \NilPortugues\SchemaOrg\Properties\ValueAddedTaxIncludedProperty valueAddedTaxIncluded()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceCurrencyProperty priceCurrency()
 * METHODEND.
 *
 * A structured value representing a monetary amount. Typically, only the subclasses of this type are used for markup.
 */
class PriceSpecification extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/PriceSpecification';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'eligibleQuantity' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleQuantityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'eligibleTransactionVolume' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleTransactionVolumeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'maxPrice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MaxPriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'minPrice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MinPriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'price' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'priceCurrency' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceCurrencyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'validFrom' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidFromProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'validThrough' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidThroughProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
        'valueAddedTaxIncluded' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValueAddedTaxIncludedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PriceSpecification',
        ],
    ];
}
