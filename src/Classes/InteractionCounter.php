<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\InteractionServiceProperty;
use NilPortugues\SchemaOrg\Properties\InteractionTypeProperty;
use NilPortugues\SchemaOrg\Properties\UserInteractionCountProperty;

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
        return InteractionServiceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function interactionType()
    {
        return InteractionTypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function userInteractionCount()
    {
        return UserInteractionCountProperty::create(self::schemaUrl());
    }
}
