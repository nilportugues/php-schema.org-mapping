<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The drive wheel configuration, i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
 */
class DriveWheelConfigurationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/driveWheelConfiguration';
    const PROPERTY_NAME = 'driveWheelConfiguration';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
