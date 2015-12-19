<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The branches that comprise the arterial structure.
 */
class ArterialBranchProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/arterialBranch';
    const PROPERTY_NAME = 'arterialBranch';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Artery',
    ];
}
