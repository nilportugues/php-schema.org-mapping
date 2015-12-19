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
 * Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
 */
class CarrierRequirementsProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/carrierRequirements';
    const PROPERTY_NAME = 'carrierRequirements';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MobileApplication',
    ];
}
