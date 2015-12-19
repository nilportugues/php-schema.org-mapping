<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
 */
class ClinicalPharmacologyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/clincalPharmacology';
    const PROPERTY_NAME = 'clinicalPharmacology';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
