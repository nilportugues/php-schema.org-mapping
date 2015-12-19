<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Specific physiologic benefits associated to the plan.
 */
class PhysiologicalBenefitsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/physiologicalBenefits';
    const PROPERTY_NAME = 'physiologicalBenefits';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Diet',
    ];
}
