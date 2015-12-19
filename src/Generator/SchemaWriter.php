<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/19/15
 * Time: 10:49 AM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Generator;

use NilPortugues\SchemaOrg\Generator\FileSystem\FileSystemInterface;

/**
 * Class SchemaWriter.
 */
abstract class SchemaWriter
{
    /**
     * @var FileSystem\FileSystemInterface
     */
    protected $fileSystem;
    /**
     * @var string
     */
    protected $savePath;

    /**
     * @param FileSystemInterface $fileSystem
     * @param string              $savePath
     */
    public function __construct(FileSystemInterface $fileSystem, $savePath)
    {
        $this->fileSystem = $fileSystem;
        $this->savePath = (string) $savePath;
    }

    /**
     * @param SchemaRdfaData $schemaData
     */
    abstract public function write(SchemaRdfaData $schemaData);
}
