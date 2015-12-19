<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\DateCreatedProperty;
use NilPortugues\SchemaOrg\Properties\DateDeletedProperty;
use NilPortugues\SchemaOrg\Properties\DateModifiedProperty;
use NilPortugues\SchemaOrg\Properties\ItemProperty;

/**
 * Classes DataFeedItem.
 */
class DataFeedItem
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/DataFeedItem';

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
    public static function dateCreated()
    {
        return DateCreatedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dateDeleted()
    {
        return DateDeletedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dateModified()
    {
        return DateModifiedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function item()
    {
        return ItemProperty::create(self::schemaUrl());
    }
}
