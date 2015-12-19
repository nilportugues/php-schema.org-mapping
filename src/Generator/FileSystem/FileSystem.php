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
 * Class FileSystem.
 */
class FileSystem implements FileSystemInterface
{
    /**
     * @param $filePath
     * @param $contents
     */
    public function write($filePath, $contents)
    {
        $path = pathinfo($filePath, PATHINFO_DIRNAME);

        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }

        file_put_contents($filePath, $contents);
    }
}
