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
 * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
 */
class AssociatedPathophysiologyProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/associatedPathophysiology';
    const PROPERTY_NAME = 'associatedPathophysiology';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AnatomicalStructure',
        'http://schema.org/AnatomicalSystem',
        'http://schema.org/SuperficialAnatomy',
    ];
}
