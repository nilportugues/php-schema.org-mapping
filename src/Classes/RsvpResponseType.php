<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes RsvpResponseType.
 */
class RsvpResponseType
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/RsvpResponseType';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }
}
