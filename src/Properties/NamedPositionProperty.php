<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A position played, performed or filled by a person or organization, as part of an organization. For example, an athlete in a SportsTeam might play in the position named 'Quarterback'.
 */
class NamedPositionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/namedPosition';
    const PROPERTY_NAME = 'namedPosition';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Role',
    ];
}
