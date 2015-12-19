<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of participant. The person that lends the object being borrowed.
 */
class LenderProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/lender';
    const PROPERTY_NAME = 'lender';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BorrowAction',
    ];
}
