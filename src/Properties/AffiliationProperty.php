<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
 */
class AffiliationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/affiliation';
    const PROPERTY_NAME = 'affiliation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
