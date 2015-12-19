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

use NilPortugues\SchemaOrg\SchemaProperty;

/**
 * The series to which this episode or season belongs.
 */
class PartOfSeriesProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/partOfSeries';
    const PROPERTY_NAME = 'partOfSeries';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Episode',
        'http://schema.org/CreativeWorkSeason',
        'http://schema.org/Clip',
    ];
}
