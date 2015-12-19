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

use NilPortugues\SchemaOrg\Classes\ContactPointOption;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ContactPointOptionTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ContactPointOptionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ContactPointOption::schemaUrl(), "http://schema.org/ContactPointOption");
    }


}