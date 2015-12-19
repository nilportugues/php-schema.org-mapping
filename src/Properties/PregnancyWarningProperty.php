<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
 */
class PregnancyWarningProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/pregnancyWarning';
    const PROPERTY_NAME = 'pregnancyWarning';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
