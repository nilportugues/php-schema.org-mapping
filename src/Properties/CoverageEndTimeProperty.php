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
 * The time when the live blog will stop covering the Event. Note that coverage may continue after the Event concludes.
 */
class CoverageEndTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/coverageEndTime';
    const PROPERTY_NAME = 'coverageEndTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LiveBlogPosting',
    ];
}
