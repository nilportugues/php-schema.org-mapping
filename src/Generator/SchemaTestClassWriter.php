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
 * Class SchemaTestClassWriter.
 */
class SchemaTestClassWriter extends SchemaWriter
{
    /**
     * @param SchemaRdfaData $schemaData
     */
    public function write(SchemaRdfaData $schemaData)
    {
        foreach ($schemaData->getClassesWithPropertyNames() as $class) {
            $className = $class->name;
            $methods = [];

            if (!empty($class->properties)) {
                foreach ($class->properties as $property) {
                    $propertyName = $property['name'];
                    $propertyNameMethodName = $propertyName;
                    $propertyNameMethodName[0] = strtoupper($propertyNameMethodName[0]);

                    if (empty($usableProperties[$propertyNameMethodName])) {
                        $methods[$propertyName] = <<<PHP
    public function test{$propertyNameMethodName}WillReturnMappingObject()
    {
        \$this->assertInstanceOf(Mapping::class, {$className}::{$propertyName}());
    }
PHP;
                    }
                }
            }

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

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\\SchemaOrg\\Classes\\{$schemaData['name']};
use NilPortugues\\SchemaOrg\\Mapping;

/**
 * Classes {$schemaData['name']}Test
 * @package NilPortugues\\Tests\\SchemaOrg\\Classes
 */
class {$schemaData['name']}Test extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        \$this->assertEquals({$schemaData['name']}::schemaUrl(), "{$schemaData['url']}");
    }

$methods
}
PHP;

            $this->fileSystem->write($this->savePath.DIRECTORY_SEPARATOR.$className.'Test.php', $phpCode);
        }
    }
}
