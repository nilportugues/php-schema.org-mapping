<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/19/15
 * Time: 3:25 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg;

use RuntimeException;

/**
 * Class SchemaClass.
 */
abstract class SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = '';

    /**
     * @var array
     */
    protected static $supportedMethods = [];

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return static::$schemaUrl;
    }

    /**
     * @param string $method
     * @param array  $args
     *
     * @throws RuntimeException
     *
     * @return \NilPortugues\SchemaOrg\Mapping;
     */
    public function __call($method, $args)
    {
        return self::__callStatic($method, $args);
    }

    /**
     * @param string $method
     * @param array  $args
     *
     * @throws RuntimeException
     *
     * @return \NilPortugues\SchemaOrg\Mapping;
     */
    public static function __callStatic($method, $args)
    {
        return self::methodCall($method);
    }

    /**
     * @param $method
     *
     * @return mixed
     *
     * @throws \RuntimeException
     */
    private static function methodCall($method)
    {
        if (!empty(static::$supportedMethods[$method])) {
            $propertyClass = static::$supportedMethods[$method]['propertyClass'];
            $class = static::$supportedMethods[$method]['schemaClass'];

            return $propertyClass::create($class::schemaUrl());
        }

        throw new RuntimeException(sprintf('Method %s does not exist.', $method));
    }
}
