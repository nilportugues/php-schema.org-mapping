<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\AlumniProperty alumni()
 * @method static \NilPortugues\SchemaOrg\Properties\HasOfferCatalogProperty hasOfferCatalog()
 * @method static \NilPortugues\SchemaOrg\Properties\AddressProperty address()
 * @method static \NilPortugues\SchemaOrg\Properties\AggregateRatingProperty aggregateRating()
 * @method static \NilPortugues\SchemaOrg\Properties\AreaServedProperty areaServed()
 * @method static \NilPortugues\SchemaOrg\Properties\AwardProperty award()
 * @method static \NilPortugues\SchemaOrg\Properties\AwardsProperty awards()
 * @method static \NilPortugues\SchemaOrg\Properties\ParentOrganizationProperty parentOrganization()
 * @method static \NilPortugues\SchemaOrg\Properties\BrandProperty brand()
 * @method static \NilPortugues\SchemaOrg\Properties\ContactPointProperty contactPoint()
 * @method static \NilPortugues\SchemaOrg\Properties\ContactPointsProperty contactPoints()
 * @method static \NilPortugues\SchemaOrg\Properties\DepartmentProperty department()
 * @method static \NilPortugues\SchemaOrg\Properties\DunsProperty duns()
 * @method static \NilPortugues\SchemaOrg\Properties\EmailProperty email()
 * @method static \NilPortugues\SchemaOrg\Properties\EmployeeProperty employee()
 * @method static \NilPortugues\SchemaOrg\Properties\EmployeesProperty employees()
 * @method static \NilPortugues\SchemaOrg\Properties\EventProperty event()
 * @method static \NilPortugues\SchemaOrg\Properties\EventsProperty events()
 * @method static \NilPortugues\SchemaOrg\Properties\FaxNumberProperty faxNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\FounderProperty founder()
 * @method static \NilPortugues\SchemaOrg\Properties\FoundersProperty founders()
 * @method static \NilPortugues\SchemaOrg\Properties\DissolutionDateProperty dissolutionDate()
 * @method static \NilPortugues\SchemaOrg\Properties\FoundingDateProperty foundingDate()
 * @method static \NilPortugues\SchemaOrg\Properties\GlobalLocationNumberProperty globalLocationNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\HasPOSProperty hasPOS()
 * @method static \NilPortugues\SchemaOrg\Properties\IsicV4Property isicV4()
 * @method static \NilPortugues\SchemaOrg\Properties\LegalNameProperty legalName()
 * @method static \NilPortugues\SchemaOrg\Properties\LocationProperty location()
 * @method static \NilPortugues\SchemaOrg\Properties\LogoProperty logo()
 * @method static \NilPortugues\SchemaOrg\Properties\MakesOfferProperty makesOffer()
 * @method static \NilPortugues\SchemaOrg\Properties\MemberProperty member()
 * @method static \NilPortugues\SchemaOrg\Properties\MemberOfProperty memberOf()
 * @method static \NilPortugues\SchemaOrg\Properties\MembersProperty members()
 * @method static \NilPortugues\SchemaOrg\Properties\NaicsProperty naics()
 * @method static \NilPortugues\SchemaOrg\Properties\NumberOfEmployeesProperty numberOfEmployees()
 * @method static \NilPortugues\SchemaOrg\Properties\OwnsProperty owns()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewProperty review()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewsProperty reviews()
 * @method static \NilPortugues\SchemaOrg\Properties\SeeksProperty seeks()
 * @method static \NilPortugues\SchemaOrg\Properties\ServiceAreaProperty serviceArea()
 * @method static \NilPortugues\SchemaOrg\Properties\SubOrganizationProperty subOrganization()
 * @method static \NilPortugues\SchemaOrg\Properties\TaxIDProperty taxID()
 * @method static \NilPortugues\SchemaOrg\Properties\TelephoneProperty telephone()
 * @method static \NilPortugues\SchemaOrg\Properties\VatIDProperty vatID()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * METHODEND.
 *
 * A school.
 */
class School extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/School';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'address' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AddressProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'aggregateRating' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AggregateRatingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alumni' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlumniProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'areaServed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AreaServedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'award' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AwardProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'awards' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AwardsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'brand' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BrandProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'contactPoint' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContactPointProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'contactPoints' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContactPointsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'department' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DepartmentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'dissolutionDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DissolutionDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'duns' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DunsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'email' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EmailProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'employee' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EmployeeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'employees' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EmployeesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'event' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EventProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'events' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EventsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'faxNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FaxNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'founder' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FounderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'founders' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FoundersProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'foundingDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FoundingDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'globalLocationNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GlobalLocationNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'hasOfferCatalog' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HasOfferCatalogProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'hasPOS' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HasPOSProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'isicV4' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsicV4Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'legalName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LegalNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'location' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'logo' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LogoProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'makesOffer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MakesOfferProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'member' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MemberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'memberOf' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MemberOfProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'members' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MembersProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'naics' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NaicsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'numberOfEmployees' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NumberOfEmployeesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'owns' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OwnsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'parentOrganization' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ParentOrganizationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'review' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'reviews' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'seeks' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SeeksProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'serviceArea' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServiceAreaProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'subOrganization' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SubOrganizationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'taxID' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TaxIDProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'telephone' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TelephoneProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'vatID' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VatIDProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Organization',
        ],
    ];
}
