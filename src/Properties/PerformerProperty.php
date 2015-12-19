<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A performer at the event&#x2014;for example, a presenter, musician, musical group or actor.
 */
class PerformerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/performer';
    const PROPERTY_NAME = 'performer';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Event',
    ];
}
