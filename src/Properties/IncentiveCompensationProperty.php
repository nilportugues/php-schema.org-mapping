<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Description of bonus and commission compensation aspects of the job.
 */
class IncentiveCompensationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/incentiveCompensation';
    const PROPERTY_NAME = 'incentiveCompensation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
