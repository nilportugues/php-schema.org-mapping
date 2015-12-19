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
 * A more specific type of the condition, where applicable, for example 'Type 1 Diabetes', 'Type 2 Diabetes', or 'Gestational Diabetes' for Diabetes.
 */
class SubtypeProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/subtype';
    const PROPERTY_NAME = 'subtype';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalCondition',
    ];
}
