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
 * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
 */
class PathophysiologyProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/pathophysiology';
    const PROPERTY_NAME = 'pathophysiology';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PhysicalActivity',
        'http://schema.org/MedicalCondition',
    ];
}
