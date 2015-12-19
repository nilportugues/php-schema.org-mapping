<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/19/15
 * Time: 12:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg;

use NilPortugues\SchemaOrg\SchemaProperty;

/**
 * Class DummyProperty.
 */
class DummyProperty extends SchemaProperty
{
    const PROPERTY_NAME = 'dummy';
    const SCHEMA_URL = 'http://nilportugues/Dummy';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = ['ItWorks'];
}
