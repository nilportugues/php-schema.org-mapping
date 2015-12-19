<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of result. The Comment created or sent as a result of this action.
 */
class ResultCommentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/resultComment';
    const PROPERTY_NAME = 'resultComment';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CommentAction',
        'http://schema.org/ReplyAction',
    ];
}
