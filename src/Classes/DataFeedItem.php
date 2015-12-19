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

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\DateCreatedProperty;
use NilPortugues\SchemaOrg\Properties\DateDeletedProperty;
use NilPortugues\SchemaOrg\Properties\DateModifiedProperty;
use NilPortugues\SchemaOrg\Properties\ItemProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes DataFeedItem.
 */
class DataFeedItem extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/DataFeedItem';

    /**
     * @return Mapping
     */
    public static function dateCreated()
    {
        return DateCreatedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dateDeleted()
    {
        return DateDeletedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dateModified()
    {
        return DateModifiedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function item()
    {
        return ItemProperty::create(self::schemaUrl());
    }
}
