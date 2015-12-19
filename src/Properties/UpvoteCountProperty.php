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

use NilPortugues\SchemaOrg\Property;

/**
 * The number of upvotes this question, answer or comment has received from the community.
 */
class UpvoteCountProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/upvoteCount';
    const PROPERTY_NAME = 'upvoteCount';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Question',
        'http://schema.org/Comment',
    ];
}
