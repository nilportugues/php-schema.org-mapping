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
 * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
 */
class CategoryProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/category';
    const PROPERTY_NAME = 'category';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Product',
        'http://schema.org/Service',
        'http://schema.org/Offer',
        'http://schema.org/Invoice',
        'http://schema.org/PhysicalActivity',
    ];
}
