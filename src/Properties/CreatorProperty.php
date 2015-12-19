<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
 */
class CreatorProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/creator';
    const PROPERTY_NAME = 'creator';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/UserComments',
    ];
}
