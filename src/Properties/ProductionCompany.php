<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\InvalidSchemaPropertyException;
use NilPortugues\SchemaOrg\MappedProperty;
use NilPortugues\SchemaOrg\Mapping;

class ProductionCompany
{
    const SCHEMA_URL = "http://schema.org/productionCompany";
    const PROPERTY_NAME = "productionCompany";

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    private static $allowedSchemas = [
		'http://schema.org/MediaObject',
		'http://schema.org/Movie',
		'http://schema.org/Episode',
		'http://schema.org/CreativeWorkSeason',
		'http://schema.org/TVSeries',
		'http://schema.org/RadioSeries',
		'http://schema.org/MovieSeries',
		'http://schema.org/VideoGameSeries',
		'http://schema.org/RadioSeries'
    ];

   /**
    * The production company or studio responsible for the item e.g. series, video game, episode etc.
    *
    * @param string $class
    *
    * @return Mapping
    */
    public static function create($class)
    {
        self::guardAllowedSchemaClasses($class);

        return MappedProperty::create($class, self::PROPERTY_NAME, self::SCHEMA_URL);
    }

   /**
    * @param string $class
    *
    * @throws InvalidSchemaPropertyException
    */
    private static function guardAllowedSchemaClasses($class) {

        if (false === empty(self::$allowedSchemas) && false === in_array($class, self::$allowedSchemas, true)) {
            throw new InvalidSchemaPropertyException(self::PROPERTY_NAME, $class);
        }
    }
}