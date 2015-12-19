<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 10:59 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg;


use NilPortugues\SchemaOrg\InvalidSchemaPropertyException;

class InvalidSchemaPropertyExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testExceptionMessage()
    {
        $this->setExpectedException(
            InvalidSchemaPropertyException::class,
            "Property 'hello' is not allowed for schema 'http://schema.org/Thing'."
        );

        throw new InvalidSchemaPropertyException('hello', 'http://schema.org/Thing');
    }
}
 