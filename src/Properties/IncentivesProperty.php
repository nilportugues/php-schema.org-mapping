<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Description of bonus and commission compensation aspects of the job.
 */
class IncentivesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/incentives';
    const PROPERTY_NAME = 'incentives';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
