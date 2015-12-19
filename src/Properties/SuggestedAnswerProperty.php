<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
 */
class SuggestedAnswerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/suggestedAnswer';
    const PROPERTY_NAME = 'suggestedAnswer';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Question',
    ];
}
