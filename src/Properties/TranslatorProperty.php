<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market.
 */
class TranslatorProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/translator';
    const PROPERTY_NAME = 'translator';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
