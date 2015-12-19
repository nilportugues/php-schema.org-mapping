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
 * Proprietary name given to the diet plan, typically by its originator or creator.
 */
class ProprietaryNameProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/proprietaryName';
    const PROPERTY_NAME = 'proprietaryName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Diet',
    ];
}
