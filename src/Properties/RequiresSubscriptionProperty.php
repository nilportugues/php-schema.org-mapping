<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates if use of the media require a subscription  (either paid or free). Allowed values are true or false (note that an earlier version had 'yes', 'no').
 */
class RequiresSubscriptionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/requiresSubscription';
    const PROPERTY_NAME = 'requiresSubscription';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
    ];
}
