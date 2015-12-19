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
 * @method static \NilPortugues\SchemaOrg\Properties\DateCreatedProperty dateCreated()
 * @method static \NilPortugues\SchemaOrg\Properties\DateDeletedProperty dateDeleted()
 * @method static \NilPortugues\SchemaOrg\Properties\DateModifiedProperty dateModified()
 * @method static \NilPortugues\SchemaOrg\Properties\ItemProperty item()
 * METHODEND.
 *
 * A single item within a larger data feed.
 */
class DataFeedItem extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/DataFeedItem';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'dateCreated' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DateCreatedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DataFeedItem',
        ],
        'dateDeleted' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DateDeletedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DataFeedItem',
        ],
        'dateModified' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DateModifiedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DataFeedItem',
        ],
        'item' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ItemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DataFeedItem',
        ],
    ];
}
