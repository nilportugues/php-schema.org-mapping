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
 * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
 */
class VideoFormatProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/videoFormat';
    const PROPERTY_NAME = 'videoFormat';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ScreeningEvent',
        'http://schema.org/BroadcastEvent',
        'http://schema.org/BroadcastService',
    ];
}
