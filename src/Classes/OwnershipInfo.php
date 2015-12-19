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
use NilPortugues\SchemaOrg\Properties\AcquiredFromProperty;
use NilPortugues\SchemaOrg\Properties\OwnedFromProperty;
use NilPortugues\SchemaOrg\Properties\OwnedThroughProperty;
use NilPortugues\SchemaOrg\Properties\TypeOfGoodProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes OwnershipInfo.
 */
class OwnershipInfo extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/OwnershipInfo';

    /**
     * @return Mapping
     */
    public static function acquiredFrom()
    {
        return AcquiredFromProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function ownedFrom()
    {
        return OwnedFromProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function ownedThrough()
    {
        return OwnedThroughProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function typeOfGood()
    {
        return TypeOfGoodProperty::create(self::schemaUrl());
    }
}
