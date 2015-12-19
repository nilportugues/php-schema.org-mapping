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
 * The postings that are part of this blog.
 */
class BlogPostsProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/blogPosts';
    const PROPERTY_NAME = 'blogPosts';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Blog',
    ];
}
