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
 * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
 */
class WorstRatingProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/worstRating';
    const PROPERTY_NAME = 'worstRating';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Rating',
    ];
}
