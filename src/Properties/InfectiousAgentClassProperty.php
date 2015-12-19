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
 * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
 */
class InfectiousAgentClassProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/infectiousAgentClass';
    const PROPERTY_NAME = 'infectiousAgentClass';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/InfectiousDisease',
    ];
}
