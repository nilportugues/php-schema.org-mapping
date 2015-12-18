<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 10:26 AM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg;


/**
 * Class InvalidSchemaPropertyException
 * @package NilPortugues\SchemaOrg
 */
class InvalidSchemaPropertyException extends \InvalidArgumentException
{
    /**
     * @param string    $propertyName
     * @param string    $schemaClass
     */
    public function __construct($propertyName, $schemaClass)
    {
        $message = sprintf("Property '%s' is not allowed for schema '%s'.", $propertyName, $schemaClass);

        parent::__construct($message);
    }
} 