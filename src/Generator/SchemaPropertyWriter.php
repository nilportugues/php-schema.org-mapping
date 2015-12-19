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
                if ('Type' === substr($belongs, -4)) {
                    $belongs = substr($belongs, 0, -4);
                }

                $allowed[] = "\t\t'".'http://schema.org/'.$belongs."'";
            }
            $allowed = implode(",\n", $allowed);

            $phpPropertyCode = <<<PHP
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
 * {$property['doc']}
 */
class {$className}Property extends SchemaProperty
{
    const SCHEMA_URL = "{$property['url']}";
    const PROPERTY_NAME = "{$property['name']}";

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static \$allowedSchemas = [
{$allowed}
    ];
}
PHP;
            $this->fileSystem->write($this->savePath.DIRECTORY_SEPARATOR.$className.'Property.php', $phpPropertyCode);
        }
    }
}
