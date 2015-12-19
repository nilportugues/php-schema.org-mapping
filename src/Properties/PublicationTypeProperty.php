<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The type of the medical article, taken from the US NLM MeSH publication type catalog.
 */
class PublicationTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/publicationType';
    const PROPERTY_NAME = 'publicationType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalScholarlyArticle',
    ];
}
