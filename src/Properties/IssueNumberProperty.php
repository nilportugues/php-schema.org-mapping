<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Identifies the issue of publication; for example, "iii" or "2".
 */
class IssueNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/issueNumber';
    const PROPERTY_NAME = 'issueNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PublicationIssue',
    ];
}
