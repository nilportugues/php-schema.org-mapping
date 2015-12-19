<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions or courses of treatment.
 */
class SignificanceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/significance';
    const PROPERTY_NAME = 'significance';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SuperficialAnatomy',
    ];
}
