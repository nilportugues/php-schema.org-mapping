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

use NilPortugues\SchemaOrg\Classes\OrganizationRole;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OrganizationRoleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class OrganizationRoleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(OrganizationRole::schemaUrl(), "http://schema.org/OrganizationRole");
    }


}