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

            sort($useProperties, SORT_REGULAR);
            $useProperties = implode("\n", array_unique($useProperties));
            ksort($methods, SORT_REGULAR);
            $methods = implode("\n\n", $methods);

            $schemaData = (array) $class;

            $phpCode = <<<PHP
<?php
namespace NilPortugues\SchemaOrg\Classes;

{$useProperties}

/**
 * Classes {$schemaData['name']}
 * @package NilPortugues\\SchemaOrg\\Classes
 *
 * {$schemaData['doc']}
 */
class {$schemaData['name']}
{
    /**
     * @var string
     */
    private static \$schemaUrl = "{$schemaData['url']}";

   /**
    * Returns the URL of the current definition at http://schema.org
    *
    * @return string
    */
    public static function schemaUrl()
    {
        return self::\$schemaUrl;
    }

$methods
}
PHP;

            $this->fileSystem->write($this->savePath.DIRECTORY_SEPARATOR.$className.'.php', $phpCode);
        }
    }
}
