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
 * Class SchemaClassWriter.
 */
class SchemaClassWriter extends SchemaWriter
{
    /**
     * @param SchemaRdfaData $schemaData
     */
    public function write(SchemaRdfaData $schemaData)
    {
        foreach ($schemaData->getClassesWithPropertyNames() as $class) {
            $className = $class->name;
            $methods = [];
            $usableProperties = [];
            $useProperties = [];

            if (!empty($class->properties)) {
                foreach ($class->properties as $propertyClassName => $property) {
                    $propertyName = $property['name'];
                    $parentClassName = $property['parent'];
                    $propertyNameMethodName = $propertyName;
                    $propertyNameMethodName[0] = strtoupper($propertyNameMethodName[0]);

                    $useProperties[] = 'use NilPortugues\\SchemaOrg\\Properties\\'.$propertyNameMethodName.'Property;';

                    if (empty($usableProperties[$propertyNameMethodName])) {
                        $usableProperties[$propertyNameMethodName] = $propertyClassName;

                        $schemaClass = 'self';
                        if ($parentClassName !== $className) {
                            $schemaClass = $parentClassName;
                        }

                        $methods[$propertyName] = <<<PHP
   /**
    * @return Mapping
    */
    public static function {$propertyName}()
    {
        return {$propertyNameMethodName}Property::create({$schemaClass}::schemaUrl());
    }
PHP;
                    }
                }
            }

            $useProperties[] = 'use NilPortugues\SchemaOrg\Mapping;';
            $useProperties[] = 'use NilPortugues\SchemaOrg\SchemaClass;';

            sort($useProperties, SORT_REGULAR);
            $useProperties = implode("\n", array_unique($useProperties));
            ksort($methods, SORT_REGULAR);
            $methods = implode("\n\n", $methods);

            $schemaData = (array) $class;

            $phpCode = <<<PHP
<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

{$useProperties}

/**
 * Classes {$schemaData['name']}
 * @package NilPortugues\\SchemaOrg\\Classes
 *
 * {$schemaData['doc']}
 */
class {$schemaData['name']} extends SchemaClass
{
    /**
     * @var string
     */
    protected static \$schemaUrl = "{$schemaData['url']}";

$methods
}
PHP;

            $this->fileSystem->write($this->savePath.DIRECTORY_SEPARATOR.$className.'.php', $phpCode);
        }
    }
}
