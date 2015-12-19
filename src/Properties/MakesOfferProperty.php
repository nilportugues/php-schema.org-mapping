<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A pointer to products or services offered by the organization or person.
 */
class MakesOfferProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/makesOffer';
    const PROPERTY_NAME = 'makesOffer';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Person',
    ];
}
