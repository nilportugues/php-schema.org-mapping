<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
 */
class IsicV4Property extends Property
{
    const SCHEMA_URL = 'http://schema.org/isicV4';
    const PROPERTY_NAME = 'isicV4';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Place',
        'http://schema.org/Person',
    ];
}
