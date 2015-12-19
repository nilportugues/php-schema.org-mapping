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
 * The page on which the work ends; for example "138" or "xvi".
 */
class PageEndProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/pageEnd';
    const PROPERTY_NAME = 'pageEnd';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PublicationVolume',
        'http://schema.org/PublicationIssue',
        'http://schema.org/Article',
    ];
}
