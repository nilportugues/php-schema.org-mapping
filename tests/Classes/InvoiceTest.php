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

use NilPortugues\SchemaOrg\Classes\Invoice;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes InvoiceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class InvoiceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Invoice::schemaUrl(), "http://schema.org/Invoice");
    }

    public function testAccountIdWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::accountId());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::alternateName());
    }

    public function testBillingPeriodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::billingPeriod());
    }

    public function testBrokerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::broker());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::category());
    }

    public function testConfirmationNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::confirmationNumber());
    }

    public function testCustomerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::customer());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::mainEntityOfPage());
    }

    public function testMinimumPaymentDueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::minimumPaymentDue());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::name());
    }

    public function testPaymentDueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::paymentDue());
    }

    public function testPaymentDueDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::paymentDueDate());
    }

    public function testPaymentMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::paymentMethod());
    }

    public function testPaymentMethodIdWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::paymentMethodId());
    }

    public function testPaymentStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::paymentStatus());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::potentialAction());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::provider());
    }

    public function testReferencesOrderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::referencesOrder());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::sameAs());
    }

    public function testScheduledPaymentDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::scheduledPaymentDate());
    }

    public function testTotalPaymentDueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::totalPaymentDue());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Invoice::url());
    }
}