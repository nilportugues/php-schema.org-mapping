<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of participant. The sports team that participated on this action.
 */
class SportsTeamProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sportsTeam';
    const PROPERTY_NAME = 'sportsTeam';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExerciseAction',
    ];
}
