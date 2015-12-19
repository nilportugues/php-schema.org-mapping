<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:02 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Generator\FileSystem;

use NilPortugues\SchemaOrg\Generator\FileSystem\InMemoryFileSystem;

class InMemoryFileSystemTest extends \PHPUnit_Framework_TestCase
{
    public function testItCanWrite()
    {
        $fileSystem = new InMemoryFileSystem();

        $fileSystem->write('testFile/Hello.php', '<?php echo "Hello World; ');
        $this->assertNotEmpty($fileSystem->get('testFile/Hello.php'));
    }
}
