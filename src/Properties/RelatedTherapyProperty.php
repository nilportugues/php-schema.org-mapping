<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A medical therapy related to this anatomy.
 */
class RelatedTherapyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/relatedTherapy';
    const PROPERTY_NAME = 'relatedTherapy';

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
