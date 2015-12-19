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
 * Link to page describing the editorial principles of the organization primarily responsible for the creation of the CreativeWork.
 */
class PublishingPrinciplesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/publishingPrinciples';
    const PROPERTY_NAME = 'publishingPrinciples';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
