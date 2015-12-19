<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/17/15
 * Time: 11:46 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg;

/**
 * Class Mapping.
 */
class Mapping
{
    /**
     * @var string
     */
    private $schemaName;
    /**
     * @var string
     */
    private $propertyName;
    /**
     * @var string
     */
    private $propertyUrl;

    /**
     * @param $schemaClass
     * @param $propertyName
     * @param $propertyUrl
     */
    public function __construct($schemaClass, $propertyName, $propertyUrl)
    {
        $this->schemaName = (string) $schemaClass;
        $this->propertyName = (string) $propertyName;
        $this->propertyUrl = (string) $propertyUrl;
    }

    /**
     * @return string
     */
    public function usedBy()
    {
        return $this->schemaName;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->propertyName;
    }

    /**
     * @return string
     */
    public function url()
    {
        return $this->propertyUrl;
    }
}
