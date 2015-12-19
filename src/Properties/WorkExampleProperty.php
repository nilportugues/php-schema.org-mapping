<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Example/instance/realization/derivation of the concept of this creative work. eg. The paperback edition, first edition, or eBook.
 */
class WorkExampleProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/workExample';
    const PROPERTY_NAME = 'workExample';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
