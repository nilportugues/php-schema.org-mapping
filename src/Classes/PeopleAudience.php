<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\HealthCondition;
use NilPortugues\SchemaOrg\Properties\RequiredGender;
use NilPortugues\SchemaOrg\Properties\RequiredMaxAge;
use NilPortugues\SchemaOrg\Properties\RequiredMinAge;
use NilPortugues\SchemaOrg\Properties\SuggestedGender;
use NilPortugues\SchemaOrg\Properties\SuggestedMaxAge;
use NilPortugues\SchemaOrg\Properties\SuggestedMinAge;

/**
 * Classes PeopleAudience
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A set of characteristics belonging to people, e.g. who compose an item's target audience.
 */
class PeopleAudience
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/PeopleAudience";

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
    public static function healthCondition()
    {
        return HealthCondition::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function requiredGender()
    {
        return RequiredGender::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function requiredMaxAge()
    {
        return RequiredMaxAge::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function requiredMinAge()
    {
        return RequiredMinAge::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function suggestedGender()
    {
        return SuggestedGender::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function suggestedMaxAge()
    {
        return SuggestedMaxAge::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function suggestedMinAge()
    {
        return SuggestedMinAge::create(self::schemaUrl());
    }
}