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
 * @method static \NilPortugues\SchemaOrg\Properties\OpeningHoursProperty openingHours()
 * @method static \NilPortugues\SchemaOrg\Properties\AddressProperty address()
 * @method static \NilPortugues\SchemaOrg\Properties\AggregateRatingProperty aggregateRating()
 * @method static \NilPortugues\SchemaOrg\Properties\BranchCodeProperty branchCode()
 * @method static \NilPortugues\SchemaOrg\Properties\ContainedInPlaceProperty containedInPlace()
 * @method static \NilPortugues\SchemaOrg\Properties\ContainsPlaceProperty containsPlace()
 * @method static \NilPortugues\SchemaOrg\Properties\ContainedInProperty containedIn()
 * @method static \NilPortugues\SchemaOrg\Properties\EventProperty event()
 * @method static \NilPortugues\SchemaOrg\Properties\EventsProperty events()
 * @method static \NilPortugues\SchemaOrg\Properties\FaxNumberProperty faxNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\GeoProperty geo()
 * @method static \NilPortugues\SchemaOrg\Properties\GlobalLocationNumberProperty globalLocationNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\IsicV4Property isicV4()
 * @method static \NilPortugues\SchemaOrg\Properties\LogoProperty logo()
 * @method static \NilPortugues\SchemaOrg\Properties\HasMapProperty hasMap()
 * @method static \NilPortugues\SchemaOrg\Properties\MapProperty map()
 * @method static \NilPortugues\SchemaOrg\Properties\MapsProperty maps()
 * @method static \NilPortugues\SchemaOrg\Properties\OpeningHoursSpecificationProperty openingHoursSpecification()
 * @method static \NilPortugues\SchemaOrg\Properties\PhotoProperty photo()
 * @method static \NilPortugues\SchemaOrg\Properties\PhotosProperty photos()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewProperty review()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewsProperty reviews()
 * @method static \NilPortugues\SchemaOrg\Properties\TelephoneProperty telephone()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalPropertyProperty additionalProperty()
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
 * A public structure, such as a town hall or concert hall.
 */
class CivicStructure extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/CivicStructure';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalProperty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalPropertyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'address' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AddressProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'aggregateRating' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AggregateRatingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'branchCode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BranchCodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'containedIn' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContainedInProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'containedInPlace' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContainedInPlaceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'containsPlace' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContainsPlaceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'event' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EventProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'events' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EventsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'faxNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FaxNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'geo' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GeoProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'globalLocationNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GlobalLocationNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'hasMap' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HasMapProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'isicV4' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsicV4Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'logo' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LogoProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'map' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MapProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'maps' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MapsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'openingHours' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OpeningHoursProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CivicStructure',
        ],
        'openingHoursSpecification' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OpeningHoursSpecificationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'photo' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PhotoProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'photos' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PhotosProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'review' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'reviews' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'telephone' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TelephoneProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Place',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
