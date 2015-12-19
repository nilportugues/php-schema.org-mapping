<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
 */
class WorkFeaturedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/workFeatured';
    const PROPERTY_NAME = 'workFeatured';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Event',
    ];
}
