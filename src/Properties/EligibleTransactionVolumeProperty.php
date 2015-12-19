<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
 */
class EligibleTransactionVolumeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/eligibleTransactionVolume';
    const PROPERTY_NAME = 'eligibleTransactionVolume';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/PriceSpecification',
        'http://schema.org/Demand',
    ];
}
