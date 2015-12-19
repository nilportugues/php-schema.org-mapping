<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
 */
class RecognizingAuthorityProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/recognizingAuthority';
    const PROPERTY_NAME = 'recognizingAuthority';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalEntity',
    ];
}
