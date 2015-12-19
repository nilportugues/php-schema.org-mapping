<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The operating organization, if different from the provider.  This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
 */
class ServiceOperatorProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/serviceOperator';
    const PROPERTY_NAME = 'serviceOperator';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/GovernmentService',
    ];
}
