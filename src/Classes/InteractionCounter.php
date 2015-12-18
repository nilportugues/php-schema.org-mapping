<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\InteractionService;
use NilPortugues\SchemaOrg\Properties\InteractionType;
use NilPortugues\SchemaOrg\Properties\UserInteractionCount;

/**
 * Classes InteractionCounter
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A summary of how users have interacted with this CreativeWork. In most cases, authors will use a subtype to specify the specific type of interaction.
 */
class InteractionCounter
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/InteractionCounter";

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
    public static function interactionService()
    {
        return InteractionService::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function interactionType()
    {
        return InteractionType::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function userInteractionCount()
    {
        return UserInteractionCount::create(self::schemaUrl());
    }
}