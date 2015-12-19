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
            $dynamicCall = [];
            $useProperties = [];

            if (!empty($class->properties)) {
                foreach ($class->properties as $propertyClassName => $property) {
                    $propertyName = $property['name'];
                    $parentClassName = $property['parent'];
                    $propertyNameMethodName = $propertyName;
                    $propertyNameMethodName[0] = strtoupper($propertyNameMethodName[0]);

                    $dynamicCall[] = ' * @method static \\NilPortugues\\SchemaOrg\\Properties\\'.$propertyNameMethodName.'Property '.$propertyName.'()';

                    if (empty($usableProperties[$propertyNameMethodName])) {
                        $usableProperties[$propertyNameMethodName] = $propertyClassName;

                        $schemaClass = '\\NilPortugues\\SchemaOrg\\Classes\\'.$className;
                        if ($parentClassName !== $className) {
                            $schemaClass = '\\NilPortugues\\SchemaOrg\\Classes\\'.$parentClassName;
                        }

                        $methods[$propertyName] = "\t\t'{$propertyName}' => [\n\t\t\t'propertyClass' => '\\NilPortugues\\SchemaOrg\\Properties\\{$propertyNameMethodName}Property',\n\t\t\t'schemaClass' => '{$schemaClass}',\n\t\t],";
                    }
                }
            }

            $useProperties[] = 'use NilPortugues\SchemaOrg\Mapping;';
            $useProperties[] = 'use NilPortugues\SchemaOrg\SchemaClass;';

            sort($useProperties, SORT_REGULAR);
            $useProperties = implode("\n", array_unique($useProperties));
            ksort($methods, SORT_REGULAR);
            $methods = implode("\n", $methods);
            $dynamicCall = implode("\n", $dynamicCall);

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
 * METHODSTART.
{$dynamicCall}
 * METHODEND.
 *
 * {$schemaData['doc']}
 */
class {$schemaData['name']} extends SchemaClass
{
    /**
     * @var string
     */
    protected static \$schemaUrl = "{$schemaData['url']}";

    /**
     * @var array
     */
    protected static \$supportedMethods = [
{$methods}
    ];
}
PHP;

            $this->fileSystem->write($this->savePath.DIRECTORY_SEPARATOR.$className.'.php', $phpCode);
        }
    }
}
