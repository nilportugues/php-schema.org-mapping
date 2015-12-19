<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
 */
class AlcoholWarningProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/alcoholWarning';
    const PROPERTY_NAME = 'alcoholWarning';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
