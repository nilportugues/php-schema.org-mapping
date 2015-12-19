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

use NilPortugues\SchemaOrg\Classes\BusinessAudience;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BusinessAudienceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BusinessAudienceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BusinessAudience::schemaUrl(), "http://schema.org/BusinessAudience");
    }

    public function testNumberOfEmployeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusinessAudience::numberOfEmployees());
    }

    public function testYearlyRevenueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusinessAudience::yearlyRevenue());
    }

    public function testYearsInOperationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusinessAudience::yearsInOperation());
    }
}