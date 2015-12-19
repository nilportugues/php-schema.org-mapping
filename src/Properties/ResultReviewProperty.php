<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of result. The review that resulted in the performing of the action.
 */
class ResultReviewProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/resultReview';
    const PROPERTY_NAME = 'resultReview';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ReviewAction',
    ];
}
