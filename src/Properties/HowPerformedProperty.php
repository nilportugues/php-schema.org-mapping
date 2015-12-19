<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * How the procedure is performed.
 */
class HowPerformedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/howPerformed';
    const PROPERTY_NAME = 'howPerformed';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalProcedure',
    ];
}
