<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The object that helped the agent perform the action. e.g. John wrote a book with *a pen*.
 */
class InstrumentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/instrument';
    const PROPERTY_NAME = 'instrument';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Action',
    ];
}
