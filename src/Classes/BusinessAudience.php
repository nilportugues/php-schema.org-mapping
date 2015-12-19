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
use NilPortugues\SchemaOrg\Properties\NumberOfEmployeesProperty;
use NilPortugues\SchemaOrg\Properties\YearlyRevenueProperty;
use NilPortugues\SchemaOrg\Properties\YearsInOperationProperty;

/**
 * Classes BusinessAudience.
 */
class BusinessAudience
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/BusinessAudience';

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
    public static function numberOfEmployees()
    {
        return NumberOfEmployeesProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function yearlyRevenue()
    {
        return YearlyRevenueProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function yearsInOperation()
    {
        return YearsInOperationProperty::create(self::schemaUrl());
    }
}
