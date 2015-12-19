<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of object. The options subject to this action.
 */
class OptionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/option';
    const PROPERTY_NAME = 'option';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ChooseAction',
    ];
}
