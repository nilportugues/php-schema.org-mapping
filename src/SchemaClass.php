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
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return static::$schemaUrl;
    }
}
