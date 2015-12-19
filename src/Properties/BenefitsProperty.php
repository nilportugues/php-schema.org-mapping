<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Description of benefits associated with the job.
 */
class BenefitsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/benefits';
    const PROPERTY_NAME = 'benefits';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
