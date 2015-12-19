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
 * One or more alternative conditions considered in the differential diagnosis process.
 */
class DiagnosisProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/diagnosis';
    const PROPERTY_NAME = 'diagnosis';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DDxElement',
    ];
}
