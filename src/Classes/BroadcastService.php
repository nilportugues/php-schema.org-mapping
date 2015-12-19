<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AreaProperty;
use NilPortugues\SchemaOrg\Properties\BroadcasterProperty;
use NilPortugues\SchemaOrg\Properties\ParentServiceProperty;
use NilPortugues\SchemaOrg\Properties\VideoFormatProperty;

/**
 * Classes BroadcastService.
 */
class BroadcastService
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/BroadcastService';

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
    public static function area()
    {
        return AreaProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function broadcaster()
    {
        return BroadcasterProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function parentService()
    {
        return ParentServiceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function videoFormat()
    {
        return VideoFormatProperty::create(self::schemaUrl());
    }
}
