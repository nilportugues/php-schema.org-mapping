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
 * Device required to run the application. Used in cases where a specific make/model is required to run the application.
 */
class AvailableOnDeviceProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/availableOnDevice';
    const PROPERTY_NAME = 'availableOnDevice';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
