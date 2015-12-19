<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
 */
class SerialNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/serialNumber';
    const PROPERTY_NAME = 'serialNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Demand',
        'http://schema.org/IndividualProduct',
    ];
}
