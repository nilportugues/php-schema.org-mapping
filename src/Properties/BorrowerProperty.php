<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of participant. The person that borrows the object being lent.
 */
class BorrowerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/borrower';
    const PROPERTY_NAME = 'borrower';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LendAction',
    ];
}
