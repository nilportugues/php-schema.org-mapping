<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A member of a music group&#x2014;for example, John, Paul, George, or Ringo.
 */
class MusicGroupMemberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/musicGroupMember';
    const PROPERTY_NAME = 'musicGroupMember';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MusicGroup',
    ];
}
