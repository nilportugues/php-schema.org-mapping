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
 * The language of the content or performance or used in an action. Please use one of the language codes from the IETF BCP 47 standard.
 */
class InLanguageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/inLanguage';
    const PROPERTY_NAME = 'inLanguage';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/Event',
        'http://schema.org/CommunicateAction',
        'http://schema.org/WriteAction',
    ];
}
