<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\InteractionService;
use NilPortugues\SchemaOrg\Properties\InteractionType;
use NilPortugues\SchemaOrg\Properties\UserInteractionCount;

/**
 * Classes InteractionCounter.
 */
class InteractionCounter
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/InteractionCounter';

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
