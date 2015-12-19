<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\DurationOfWarrantyProperty;
use NilPortugues\SchemaOrg\Properties\WarrantyScopeProperty;

/**
 * Classes WarrantyPromise.
 */
class WarrantyPromise
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/WarrantyPromise';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

    /**
     * @return Mapping
     */
    public static function durationOfWarranty()
    {
        return DurationOfWarrantyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function warrantyScope()
    {
        return WarrantyScopeProperty::create(self::schemaUrl());
    }
}
