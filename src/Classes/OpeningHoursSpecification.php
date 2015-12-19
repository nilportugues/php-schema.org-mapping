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
use NilPortugues\SchemaOrg\Properties\ClosesProperty;
use NilPortugues\SchemaOrg\Properties\DayOfWeekProperty;
use NilPortugues\SchemaOrg\Properties\OpensProperty;
use NilPortugues\SchemaOrg\Properties\ValidFromProperty;
use NilPortugues\SchemaOrg\Properties\ValidThroughProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes OpeningHoursSpecification.
 */
class OpeningHoursSpecification extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/OpeningHoursSpecification';

    /**
     * @return Mapping
     */
    public static function closes()
    {
        return ClosesProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dayOfWeek()
    {
        return DayOfWeekProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function opens()
    {
        return OpensProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function validFrom()
    {
        return ValidFromProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function validThrough()
    {
        return ValidThroughProperty::create(self::schemaUrl());
    }
}
