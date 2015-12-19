<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The order is being paid as part of the referenced Invoice.
 */
class PartOfInvoiceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/partOfInvoice';
    const PROPERTY_NAME = 'partOfInvoice';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
    ];
}
