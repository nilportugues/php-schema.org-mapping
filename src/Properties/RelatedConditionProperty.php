<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A medical condition associated with this anatomy.
 */
class RelatedConditionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/relatedCondition';
    const PROPERTY_NAME = 'relatedCondition';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AnatomicalStructure',
        'http://schema.org/AnatomicalSystem',
        'http://schema.org/SuperficialAnatomy',
    ];
}
