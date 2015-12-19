<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
 */
class ValueAddedTaxIncludedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/valueAddedTaxIncluded';
    const PROPERTY_NAME = 'valueAddedTaxIncluded';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PriceSpecification',
    ];
}
