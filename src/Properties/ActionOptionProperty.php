<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of object. The options subject to this action.
 */
class ActionOptionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/actionOption';
    const PROPERTY_NAME = 'actionOption';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ChooseAction',
    ];
}
