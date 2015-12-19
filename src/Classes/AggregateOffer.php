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
 * @method static \NilPortugues\SchemaOrg\Properties\HighPriceProperty highPrice()
 * @method static \NilPortugues\SchemaOrg\Properties\LowPriceProperty lowPrice()
 * @method static \NilPortugues\SchemaOrg\Properties\OfferCountProperty offerCount()
 * @method static \NilPortugues\SchemaOrg\Properties\OffersProperty offers()
 * METHODEND.
 *
 * When a single product is associated with multiple offers (for example, the same pair of shoes is offered by different merchants), then AggregateOffer can be used.
 */
class AggregateOffer extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/AggregateOffer';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'highPrice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HighPriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateOffer',
        ],
        'lowPrice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LowPriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateOffer',
        ],
        'offerCount' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OfferCountProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateOffer',
        ],
        'offers' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OffersProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateOffer',
        ],
    ];
}
