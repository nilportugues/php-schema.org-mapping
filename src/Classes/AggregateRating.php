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
 * @method static \NilPortugues\SchemaOrg\Properties\ItemReviewedProperty itemReviewed()
 * @method static \NilPortugues\SchemaOrg\Properties\RatingCountProperty ratingCount()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewCountProperty reviewCount()
 * @method static \NilPortugues\SchemaOrg\Properties\BestRatingProperty bestRating()
 * @method static \NilPortugues\SchemaOrg\Properties\RatingValueProperty ratingValue()
 * @method static \NilPortugues\SchemaOrg\Properties\WorstRatingProperty worstRating()
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
 * The average rating based on multiple ratings or reviews.
 */
class AggregateRating extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/AggregateRating';

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
        'bestRating' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BestRatingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Rating',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'itemReviewed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ItemReviewedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateRating',
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
        'ratingCount' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RatingCountProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateRating',
        ],
        'ratingValue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RatingValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Rating',
        ],
        'reviewCount' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewCountProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateRating',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'worstRating' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WorstRatingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Rating',
        ],
    ];
}
