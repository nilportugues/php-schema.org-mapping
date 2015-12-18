<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\NumberOfEmployees;
use NilPortugues\SchemaOrg\Properties\YearlyRevenue;
use NilPortugues\SchemaOrg\Properties\YearsInOperation;

/**
 * Classes BusinessAudience
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A set of characteristics belonging to businesses, e.g. who compose an item's target audience.
 */
class BusinessAudience
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/BusinessAudience";

   /**
    * Returns the URL of the current definition at http://schema.org
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
        return NumberOfEmployees::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function yearlyRevenue()
    {
        return YearlyRevenue::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function yearsInOperation()
    {
        return YearsInOperation::create(self::schemaUrl());
    }
}