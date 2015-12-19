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
 * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
 */
class ReviewedByProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/reviewedBy';
    const PROPERTY_NAME = 'reviewedBy';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WebPage',
    ];
}
