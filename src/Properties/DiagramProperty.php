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
 * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
 */
class DiagramProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/diagram';
    const PROPERTY_NAME = 'diagram';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AnatomicalStructure',
    ];
}
