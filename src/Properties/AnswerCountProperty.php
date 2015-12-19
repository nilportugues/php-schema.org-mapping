<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of answers this question has received.
 */
class AnswerCountProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/answerCount';
    const PROPERTY_NAME = 'answerCount';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Question',
    ];
}
