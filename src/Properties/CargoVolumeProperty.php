<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.
 */
class CargoVolumeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/cargoVolume';
    const PROPERTY_NAME = 'cargoVolume';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
