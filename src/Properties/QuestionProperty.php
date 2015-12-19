<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of object. A question.
 */
class QuestionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/question';
    const PROPERTY_NAME = 'question';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AskAction',
    ];
}
