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

use NilPortugues\SchemaOrg\Property;

/**
 * Anatomical systems or structures that relate to the superficial anatomy.
 */
class RelatedAnatomyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/relatedAnatomy';
    const PROPERTY_NAME = 'relatedAnatomy';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SuperficialAnatomy',
    ];
}
