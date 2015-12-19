<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/19/15
 * Time: 11:41 AM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg;

/**
 * Class Property.
 */
abstract class SchemaProperty
{
    const PROPERTY_NAME = '';
    const SCHEMA_URL = '';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [];

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     *
     * @param string $class
     *
     * @return Mapping
     */
    public static function create($class)
    {
        self::guardAllowedSchemaClasses($class);

        return MappedProperty::create($class, static::PROPERTY_NAME, static::SCHEMA_URL);
    }

    /**
     * @param string $class
     *
     * @throws InvalidSchemaPropertyException
     */
    private static function guardAllowedSchemaClasses($class)
    {
        if (false === empty(static::$allowedSchemas) && !in_array($class, static::$allowedSchemas, true)) {
            throw new InvalidSchemaPropertyException(static::PROPERTY_NAME, $class);
        }
    }
}
