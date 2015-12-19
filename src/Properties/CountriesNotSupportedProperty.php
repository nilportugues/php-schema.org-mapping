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
 * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
 */
class CountriesNotSupportedProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/countriesNotSupported';
    const PROPERTY_NAME = 'countriesNotSupported';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
