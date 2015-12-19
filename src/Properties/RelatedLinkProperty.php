<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A link related to this web page, for example to other related web pages.
 */
class RelatedLinkProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/relatedLink';
    const PROPERTY_NAME = 'relatedLink';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WebPage',
    ];
}
