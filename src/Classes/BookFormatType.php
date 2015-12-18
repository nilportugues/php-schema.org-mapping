<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BookFormatType
 * @package NilPortugues\SchemaOrg\Classes
 *
 * The publication format of the book.
 */
class BookFormatType
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/BookFormatType";

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