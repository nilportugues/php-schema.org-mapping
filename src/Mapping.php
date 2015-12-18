<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/17/15
 * Time: 11:46 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg;


/**
 * Class Mapping
 * @package NilPortugues\SchemaOrg
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
        $this->schemaName = $schemaClass;
        $this->propertyName = $propertyName;
        $this->propertyUrl = $propertyUrl;
    }

    /**
     * @return mixed
     */
    public function parent()
    {
        return $this->schemaName;
    }

    /**
     * @return mixed
     */
    public function name()
    {
        return $this->propertyName;
    }

    /**
     * @return mixed
     */
    public function url()
    {
        return $this->propertyUrl;
    }
} 