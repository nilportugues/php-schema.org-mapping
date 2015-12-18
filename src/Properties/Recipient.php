<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\InvalidSchemaPropertyException;
use NilPortugues\SchemaOrg\MappedProperty;
use NilPortugues\SchemaOrg\Mapping;

class Recipient
{
    const SCHEMA_URL = 'http://schema.org/recipient';
    const PROPERTY_NAME = 'recipient';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    private static $allowedSchemas = [
        'http://schema.org/CommunicateAction',
        'http://schema.org/AuthorizeAction',
        'http://schema.org/DonateAction',
        'http://schema.org/GiveAction',
        'http://schema.org/PayAction',
        'http://schema.org/ReturnAction',
        'http://schema.org/SendAction',
        'http://schema.org/TipAction',
    ];

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
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
    private static function guardAllowedSchemaClasses($class)
    {
        if (false === empty(self::$allowedSchemas) && false === in_array($class, self::$allowedSchemas, true)) {
            throw new InvalidSchemaPropertyException(self::PROPERTY_NAME, $class);
        }
    }
}
