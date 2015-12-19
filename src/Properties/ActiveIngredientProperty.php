<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An active ingredient, typically chemical compounds and/or biologic substances.
 */
class ActiveIngredientProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/activeIngredient';
    const PROPERTY_NAME = 'activeIngredient';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DietarySupplement',
        'http://schema.org/Drug',
        'http://schema.org/DrugStrength',
    ];
}
