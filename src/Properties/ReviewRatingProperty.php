<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The rating given in this review. Note that reviews can themselves be rated. The reviewRating applies to rating given by the review. The aggregateRating property applies to the review itself, as a creative work.
 */
class ReviewRatingProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/reviewRating';
    const PROPERTY_NAME = 'reviewRating';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Review',
    ];
}
