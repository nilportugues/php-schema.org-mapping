<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 10:46 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Generator;

/**
 * Class SchemaPropertyWriter.
 */
class SchemaPropertyWriter extends SchemaWriter
{
    /**
     * @param SchemaRdfaData $schemaData
     */
    public function write(SchemaRdfaData $schemaData)
    {
        foreach ($schemaData->getProperties() as $property) {
            $className = $property['name'];
            $className[0] = strtoupper($className[0]);

            $allowed = [];
            foreach ($property['usedOnClass'] as $belongs) {
                $allowed[] = "\t\t'".'http://schema.org/'.$belongs."'";
            }
            $allowed = implode(",\n", $allowed);

            $phpPropertyCode = <<<PHP
<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\InvalidSchemaPropertyException;
use NilPortugues\SchemaOrg\MappedProperty;
use NilPortugues\SchemaOrg\Mapping;

class {$className}
{
    const SCHEMA_URL = "{$property['url']}";
    const PROPERTY_NAME = "{$property['name']}";

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    private static \$allowedSchemas = [
{$allowed}
    ];

   /**
    * {$property['doc']}
    *
    * @param string \$class
    *
    * @return Mapping
    */
    public static function create(\$class)
    {
        self::guardAllowedSchemaClasses(\$class);

        return MappedProperty::create(\$class, self::PROPERTY_NAME, self::SCHEMA_URL);
    }

   /**
    * @param string \$class
    *
    * @throws InvalidSchemaPropertyException
    */
    private static function guardAllowedSchemaClasses(\$class) {

        if (false === empty(self::\$allowedSchemas) && false === in_array(\$class, self::\$allowedSchemas, true)) {
            throw new InvalidSchemaPropertyException(self::PROPERTY_NAME, \$class);
        }
    }
}
PHP;
            $this->fileSystem->write($this->savePath.DIRECTORY_SEPARATOR.$className.'.php', $phpPropertyCode);
        }
    }
}
