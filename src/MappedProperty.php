<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/17/15
 * Time: 11:41 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg;

/**
 * Class MappedProperty
 * @package NilPortugues\SchemaOrg
 */
class MappedProperty
{
    /**
     * @var array
     */
    private static $instances = [];

    /**
     * @param string $schemaClass
     * @param string $propertyName
     * @param string $propertyUrl
     *
     * @return Mapping
     */
    public static function create($schemaClass, $propertyName, $propertyUrl)
    {
        $key = md5(implode(".", func_get_args()));
        if (empty(self::$instances[$key])) {
            self::$instances[$key] = new Mapping($schemaClass, $propertyName, $propertyUrl);
        }

        return self::$instances[$key];
    }
} 