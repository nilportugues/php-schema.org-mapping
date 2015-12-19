<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The answer that has been accepted as best, typically on a Question/Answer site. Sites vary in their selection mechanisms, e.g. drawing on community opinion and/or the view of the Question author.
 */
class AcceptedAnswerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/acceptedAnswer';
    const PROPERTY_NAME = 'acceptedAnswer';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Question',
    ];
}
