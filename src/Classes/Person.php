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
 * @method static \NilPortugues\SchemaOrg\Properties\HasOfferCatalogProperty hasOfferCatalog()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalNameProperty additionalName()
 * @method static \NilPortugues\SchemaOrg\Properties\AddressProperty address()
 * @method static \NilPortugues\SchemaOrg\Properties\AffiliationProperty affiliation()
 * @method static \NilPortugues\SchemaOrg\Properties\AlumniOfProperty alumniOf()
 * @method static \NilPortugues\SchemaOrg\Properties\AwardProperty award()
 * @method static \NilPortugues\SchemaOrg\Properties\AwardsProperty awards()
 * @method static \NilPortugues\SchemaOrg\Properties\BirthDateProperty birthDate()
 * @method static \NilPortugues\SchemaOrg\Properties\BrandProperty brand()
 * @method static \NilPortugues\SchemaOrg\Properties\ChildrenProperty children()
 * @method static \NilPortugues\SchemaOrg\Properties\ColleagueProperty colleague()
 * @method static \NilPortugues\SchemaOrg\Properties\ColleaguesProperty colleagues()
 * @method static \NilPortugues\SchemaOrg\Properties\ContactPointProperty contactPoint()
 * @method static \NilPortugues\SchemaOrg\Properties\ContactPointsProperty contactPoints()
 * @method static \NilPortugues\SchemaOrg\Properties\DeathDateProperty deathDate()
 * @method static \NilPortugues\SchemaOrg\Properties\DunsProperty duns()
 * @method static \NilPortugues\SchemaOrg\Properties\EmailProperty email()
 * @method static \NilPortugues\SchemaOrg\Properties\FamilyNameProperty familyName()
 * @method static \NilPortugues\SchemaOrg\Properties\FaxNumberProperty faxNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\FollowsProperty follows()
 * @method static \NilPortugues\SchemaOrg\Properties\GenderProperty gender()
 * @method static \NilPortugues\SchemaOrg\Properties\GivenNameProperty givenName()
 * @method static \NilPortugues\SchemaOrg\Properties\GlobalLocationNumberProperty globalLocationNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\HasPOSProperty hasPOS()
 * @method static \NilPortugues\SchemaOrg\Properties\HeightProperty height()
 * @method static \NilPortugues\SchemaOrg\Properties\HomeLocationProperty homeLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\HonorificPrefixProperty honorificPrefix()
 * @method static \NilPortugues\SchemaOrg\Properties\HonorificSuffixProperty honorificSuffix()
 * @method static \NilPortugues\SchemaOrg\Properties\IsicV4Property isicV4()
 * @method static \NilPortugues\SchemaOrg\Properties\JobTitleProperty jobTitle()
 * @method static \NilPortugues\SchemaOrg\Properties\KnowsProperty knows()
 * @method static \NilPortugues\SchemaOrg\Properties\MakesOfferProperty makesOffer()
 * @method static \NilPortugues\SchemaOrg\Properties\MemberOfProperty memberOf()
 * @method static \NilPortugues\SchemaOrg\Properties\NaicsProperty naics()
 * @method static \NilPortugues\SchemaOrg\Properties\NationalityProperty nationality()
 * @method static \NilPortugues\SchemaOrg\Properties\NetWorthProperty netWorth()
 * @method static \NilPortugues\SchemaOrg\Properties\OwnsProperty owns()
 * @method static \NilPortugues\SchemaOrg\Properties\ParentProperty parent()
 * @method static \NilPortugues\SchemaOrg\Properties\ParentsProperty parents()
 * @method static \NilPortugues\SchemaOrg\Properties\PerformerInProperty performerIn()
 * @method static \NilPortugues\SchemaOrg\Properties\RelatedToProperty relatedTo()
 * @method static \NilPortugues\SchemaOrg\Properties\SeeksProperty seeks()
 * @method static \NilPortugues\SchemaOrg\Properties\SiblingProperty sibling()
 * @method static \NilPortugues\SchemaOrg\Properties\SiblingsProperty siblings()
 * @method static \NilPortugues\SchemaOrg\Properties\SpouseProperty spouse()
 * @method static \NilPortugues\SchemaOrg\Properties\TaxIDProperty taxID()
 * @method static \NilPortugues\SchemaOrg\Properties\TelephoneProperty telephone()
 * @method static \NilPortugues\SchemaOrg\Properties\VatIDProperty vatID()
 * @method static \NilPortugues\SchemaOrg\Properties\WeightProperty weight()
 * @method static \NilPortugues\SchemaOrg\Properties\WorkLocationProperty workLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\WorksForProperty worksFor()
 * METHODEND.
 *
 * A person (alive, dead, undead, or fictional).
 */
class Person extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Person';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'address' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AddressProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'affiliation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AffiliationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'alumniOf' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlumniOfProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'award' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AwardProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'awards' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AwardsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'birthDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BirthDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'brand' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BrandProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'children' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ChildrenProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'colleague' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ColleagueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'colleagues' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ColleaguesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'contactPoint' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContactPointProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'contactPoints' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContactPointsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'deathDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DeathDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'duns' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DunsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'email' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EmailProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'familyName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FamilyNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'faxNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FaxNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'follows' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FollowsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'gender' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GenderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'givenName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GivenNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'globalLocationNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GlobalLocationNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'hasOfferCatalog' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HasOfferCatalogProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'hasPOS' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HasPOSProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'height' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HeightProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'homeLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HomeLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'honorificPrefix' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HonorificPrefixProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'honorificSuffix' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HonorificSuffixProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'isicV4' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsicV4Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'jobTitle' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\JobTitleProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'knows' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\KnowsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'makesOffer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MakesOfferProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'memberOf' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MemberOfProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'naics' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NaicsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'nationality' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NationalityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'netWorth' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NetWorthProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'owns' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OwnsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'parent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ParentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'parents' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ParentsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'performerIn' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PerformerInProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'relatedTo' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelatedToProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'seeks' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SeeksProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'sibling' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SiblingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'siblings' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SiblingsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'spouse' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SpouseProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'taxID' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TaxIDProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'telephone' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TelephoneProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'vatID' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VatIDProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'weight' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WeightProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'workLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WorkLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
        'worksFor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WorksForProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Person',
        ],
    ];
}
