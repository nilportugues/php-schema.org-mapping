<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Subcategory of the application, e.g. "Arcade Game".
 */
class ApplicationSubCategoryProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/applicationSubCategory';
    const PROPERTY_NAME = 'applicationSubCategory';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
