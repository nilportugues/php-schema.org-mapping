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

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ItemReviewedProperty;
use NilPortugues\SchemaOrg\Properties\RatingCountProperty;
use NilPortugues\SchemaOrg\Properties\ReviewCountProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes AggregateRating.
 */
class AggregateRating extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/AggregateRating';

    /**
     * @return Mapping
     */
    public static function itemReviewed()
    {
        return ItemReviewedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function ratingCount()
    {
        return RatingCountProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reviewCount()
    {
        return ReviewCountProperty::create(self::schemaUrl());
    }
}
