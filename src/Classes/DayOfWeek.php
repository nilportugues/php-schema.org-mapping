<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DayOfWeek
 * @package NilPortugues\SchemaOrg\Classes
 *
 * The day of the week, e.g. used to specify to which day the opening hours of an OpeningHoursSpecification refer.

    Commonly used values:

    http://purl.org/goodrelations/v1#Monday 
    http://purl.org/goodrelations/v1#Tuesday 
    http://purl.org/goodrelations/v1#Wednesday 
    http://purl.org/goodrelations/v1#Thursday 
    http://purl.org/goodrelations/v1#Friday 
    http://purl.org/goodrelations/v1#Saturday 
    http://purl.org/goodrelations/v1#Sunday 
    http://purl.org/goodrelations/v1#PublicHolidays 
        
 */
class DayOfWeek
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/DayOfWeek";

   /**
    * Returns the URL of the current definition at http://schema.org
    *
    * @return string
    */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }


}