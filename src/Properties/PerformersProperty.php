<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The main performer or performers of the event&#x2014;for example, a presenter, musician, or actor.
 */
class PerformersProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/performers';
    const PROPERTY_NAME = 'performers';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Event',
    ];
}
