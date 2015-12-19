<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
 */
class SharedContentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sharedContent';
    const PROPERTY_NAME = 'sharedContent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SocialMediaPosting',
    ];
}
