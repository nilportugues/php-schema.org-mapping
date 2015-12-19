<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\CharacterNameProperty;

/**
 * Classes PerformanceRole.
 */
class PerformanceRole
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/PerformanceRole';

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
    public static function characterName()
    {
        return CharacterNameProperty::create(self::schemaUrl());
    }
}
