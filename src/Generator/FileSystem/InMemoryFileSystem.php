<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:00 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Generator\FileSystem;

/**
 * Class InMemoryFileSystem.
 */
class InMemoryFileSystem implements FileSystemInterface
{
    private $fileSystem = [];

    /**
     * @param string $filePath
     * @param string $contents
     */
    public function write($filePath, $contents)
    {
        $this->fileSystem[$filePath] = $contents;
    }

    /**
     * @param string $filePath
     *
     * @return string
     */
    public function get($filePath)
    {
        return $this->fileSystem[$filePath];
    }
}
