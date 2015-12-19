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
 * Identifies input methods that are sufficient to fully control the described resource (WebSchemas wiki lists possible values).
 */
class AccessibilityControlProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/accessibilityControl';
    const PROPERTY_NAME = 'accessibilityControl';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
