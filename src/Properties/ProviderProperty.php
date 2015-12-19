<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
 */
class ProviderProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/provider';
    const PROPERTY_NAME = 'provider';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/Service',
        'http://schema.org/Invoice',
        'http://schema.org/Reservation',
        'http://schema.org/Flight',
        'http://schema.org/ParcelDelivery',
        'http://schema.org/TrainTrip',
        'http://schema.org/BusTrip',
    ];
}
