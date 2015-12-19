<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\SchemaProperty;

/**
 * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
 */
class BestRatingProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/bestRating';
    const PROPERTY_NAME = 'bestRating';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Rating',
    ];
}
