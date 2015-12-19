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
 * @method static \NilPortugues\SchemaOrg\Properties\AreaProperty area()
 * @method static \NilPortugues\SchemaOrg\Properties\BroadcasterProperty broadcaster()
 * @method static \NilPortugues\SchemaOrg\Properties\ParentServiceProperty parentService()
 * @method static \NilPortugues\SchemaOrg\Properties\VideoFormatProperty videoFormat()
 * @method static \NilPortugues\SchemaOrg\Properties\HasOfferCatalogProperty hasOfferCatalog()
 * @method static \NilPortugues\SchemaOrg\Properties\AggregateRatingProperty aggregateRating()
 * @method static \NilPortugues\SchemaOrg\Properties\AreaServedProperty areaServed()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailableChannelProperty availableChannel()
 * @method static \NilPortugues\SchemaOrg\Properties\AwardProperty award()
 * @method static \NilPortugues\SchemaOrg\Properties\CategoryProperty category()
 * @method static \NilPortugues\SchemaOrg\Properties\HoursAvailableProperty hoursAvailable()
 * @method static \NilPortugues\SchemaOrg\Properties\OffersProperty offers()
 * @method static \NilPortugues\SchemaOrg\Properties\ProducesProperty produces()
 * @method static \NilPortugues\SchemaOrg\Properties\ServiceOutputProperty serviceOutput()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewProperty review()
 * @method static \NilPortugues\SchemaOrg\Properties\ServiceAreaProperty serviceArea()
 * @method static \NilPortugues\SchemaOrg\Properties\ServiceAudienceProperty serviceAudience()
 * @method static \NilPortugues\SchemaOrg\Properties\ServiceTypeProperty serviceType()
 * @method static \NilPortugues\SchemaOrg\Properties\ProviderProperty provider()
 * @method static \NilPortugues\SchemaOrg\Properties\ProviderMobilityProperty providerMobility()
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
 * A delivery service through which content is provided via broadcast over the air or online.
 */
class BroadcastService extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/BroadcastService';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'aggregateRating' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AggregateRatingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'area' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AreaProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BroadcastService',
        ],
        'areaServed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AreaServedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'availableChannel' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailableChannelProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'award' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AwardProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'broadcaster' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BroadcasterProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BroadcastService',
        ],
        'category' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CategoryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'hasOfferCatalog' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HasOfferCatalogProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'hoursAvailable' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HoursAvailableProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
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
        'offers' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OffersProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'parentService' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ParentServiceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BroadcastService',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'produces' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProducesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'provider' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProviderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'providerMobility' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProviderMobilityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'review' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'serviceArea' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServiceAreaProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'serviceAudience' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServiceAudienceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'serviceOutput' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServiceOutputProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'serviceType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServiceTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Service',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'videoFormat' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VideoFormatProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BroadcastService',
        ],
    ];
}
