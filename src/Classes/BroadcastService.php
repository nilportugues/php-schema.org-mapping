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
use NilPortugues\SchemaOrg\Properties\AreaProperty;
use NilPortugues\SchemaOrg\Properties\BroadcasterProperty;
use NilPortugues\SchemaOrg\Properties\ParentServiceProperty;
use NilPortugues\SchemaOrg\Properties\VideoFormatProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes BroadcastService.
 */
class BroadcastService extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/BroadcastService';

    /**
     * @return Mapping
     */
    public static function area()
    {
        return AreaProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function broadcaster()
    {
        return BroadcasterProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function parentService()
    {
        return ParentServiceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function videoFormat()
    {
        return VideoFormatProperty::create(self::schemaUrl());
    }
}
