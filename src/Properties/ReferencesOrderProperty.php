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
 * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
 */
class ReferencesOrderProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/referencesOrder';
    const PROPERTY_NAME = 'referencesOrder';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Invoice',
    ];
}
