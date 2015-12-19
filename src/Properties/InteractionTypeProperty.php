<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The Action representing the type of interaction. For up votes, +1s, etc. use LikeAction. For down votes use DislikeAction. Otherwise, use the most specific Action.
 */
class InteractionTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/interactionType';
    const PROPERTY_NAME = 'interactionType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/InteractionCounter',
    ];
}
