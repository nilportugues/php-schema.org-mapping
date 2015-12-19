<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\AreaProperty area()
 * @method static \NilPortugues\SchemaOrg\Properties\BroadcasterProperty broadcaster()
 * @method static \NilPortugues\SchemaOrg\Properties\ParentServiceProperty parentService()
 * @method static \NilPortugues\SchemaOrg\Properties\VideoFormatProperty videoFormat()
 * METHODEND.
 *
 * A delivery service through which content is provided via broadcast over the air or online.
 */
class BroadcastService extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/BroadcastService';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'area' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AreaProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BroadcastService',
        ],
        'broadcaster' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BroadcasterProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BroadcastService',
        ],
        'parentService' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ParentServiceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BroadcastService',
        ],
        'videoFormat' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VideoFormatProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BroadcastService',
        ],
    ];
}
