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
 * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
 */
class ArticleSectionProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/articleSection';
    const PROPERTY_NAME = 'articleSection';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Article',
    ];
}
