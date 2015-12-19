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
 * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
 */
class RelatedStructureProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/relatedStructure';
    const PROPERTY_NAME = 'relatedStructure';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AnatomicalSystem',
    ];
}
