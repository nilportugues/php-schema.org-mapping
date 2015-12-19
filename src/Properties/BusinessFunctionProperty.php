<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
 */
class BusinessFunctionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/businessFunction';
    const PROPERTY_NAME = 'businessFunction';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Demand',
        'http://schema.org/TypeAndQuantityNode',
    ];
}
