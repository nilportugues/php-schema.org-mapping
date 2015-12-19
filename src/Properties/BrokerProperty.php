<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
 */
class BrokerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/broker';
    const PROPERTY_NAME = 'broker';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Reservation',
        'http://schema.org/Order',
        'http://schema.org/Invoice',
    ];
}
