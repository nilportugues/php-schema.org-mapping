<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A route by which this drug may be administered, e.g. 'oral'.
 */
class AdministrationRouteProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/administrationRoute';
    const PROPERTY_NAME = 'administrationRoute';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
