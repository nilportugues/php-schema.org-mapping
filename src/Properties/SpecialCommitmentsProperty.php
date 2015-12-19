<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
 */
class SpecialCommitmentsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/specialCommitments';
    const PROPERTY_NAME = 'specialCommitments';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
