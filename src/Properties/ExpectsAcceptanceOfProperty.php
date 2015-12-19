<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
 */
class ExpectsAcceptanceOfProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/expectsAcceptanceOf';
    const PROPERTY_NAME = 'expectsAcceptanceOf';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ConsumeAction',
    ];
}
