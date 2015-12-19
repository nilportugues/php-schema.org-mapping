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
 * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
 */
class ParentServiceProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/parentService';
    const PROPERTY_NAME = 'parentService';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BroadcastService',
    ];
}
