<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A creative work that this work is an example/instance/realization/derivation of.
 */
class ExampleOfWorkProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/exampleOfWork';
    const PROPERTY_NAME = 'exampleOfWork';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
