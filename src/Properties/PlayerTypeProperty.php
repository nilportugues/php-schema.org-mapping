<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Player type required&#x2014;for example, Flash or Silverlight.
 */
class PlayerTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/playerType';
    const PROPERTY_NAME = 'playerType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
    ];
}
