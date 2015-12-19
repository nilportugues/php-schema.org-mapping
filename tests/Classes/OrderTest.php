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

use NilPortugues\SchemaOrg\Classes\Order;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OrderTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class OrderTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Order::schemaUrl(), "http://schema.org/Order");
    }

    public function testAcceptedOfferWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::acceptedOffer());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::alternateName());
    }

    public function testBillingAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::billingAddress());
    }

    public function testBrokerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::broker());
    }

    public function testConfirmationNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::confirmationNumber());
    }

    public function testCustomerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::customer());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::description());
    }

    public function testDiscountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::discount());
    }

    public function testDiscountCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::discountCode());
    }

    public function testDiscountCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::discountCurrency());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::image());
    }

    public function testIsGiftWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::isGift());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::mainEntityOfPage());
    }

    public function testMerchantWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::merchant());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::name());
    }

    public function testOrderDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::orderDate());
    }

    public function testOrderDeliveryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::orderDelivery());
    }

    public function testOrderNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::orderNumber());
    }

    public function testOrderStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::orderStatus());
    }

    public function testOrderedItemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::orderedItem());
    }

    public function testPartOfInvoiceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::partOfInvoice());
    }

    public function testPaymentDueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::paymentDue());
    }

    public function testPaymentDueDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::paymentDueDate());
    }

    public function testPaymentMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::paymentMethod());
    }

    public function testPaymentMethodIdWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::paymentMethodId());
    }

    public function testPaymentUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::paymentUrl());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::sameAs());
    }

    public function testSellerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::seller());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Order::url());
    }
}