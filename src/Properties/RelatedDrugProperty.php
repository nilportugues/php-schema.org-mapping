<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Any other drug related to this one, for example commonly-prescribed alternatives.
 */
class RelatedDrugProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/relatedDrug';
    const PROPERTY_NAME = 'relatedDrug';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
