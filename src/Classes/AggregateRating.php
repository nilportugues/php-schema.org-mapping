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
        'itemReviewed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ItemReviewedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateRating',
        ],
        'ratingCount' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RatingCountProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateRating',
        ],
        'reviewCount' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewCountProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateRating',
        ],
    ];
}
