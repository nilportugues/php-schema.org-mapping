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
 * @method static \NilPortugues\SchemaOrg\Properties\BreadcrumbProperty breadcrumb()
 * @method static \NilPortugues\SchemaOrg\Properties\LastReviewedProperty lastReviewed()
 * @method static \NilPortugues\SchemaOrg\Properties\MainContentOfPageProperty mainContentOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\PrimaryImageOfPageProperty primaryImageOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\RelatedLinkProperty relatedLink()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewedByProperty reviewedBy()
 * @method static \NilPortugues\SchemaOrg\Properties\SignificantLinkProperty significantLink()
 * @method static \NilPortugues\SchemaOrg\Properties\SignificantLinksProperty significantLinks()
 * @method static \NilPortugues\SchemaOrg\Properties\SpecialtyProperty specialty()
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
 * Web page type: Image gallery page.
 */
class ImageGallery extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/ImageGallery';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'breadcrumb' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BreadcrumbProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\WebPage',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'lastReviewed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LastReviewedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\WebPage',
        ],
        'mainContentOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainContentOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\WebPage',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'primaryImageOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PrimaryImageOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\WebPage',
        ],
        'relatedLink' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelatedLinkProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\WebPage',
        ],
        'reviewedBy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewedByProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\WebPage',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'significantLink' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SignificantLinkProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\WebPage',
        ],
        'significantLinks' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SignificantLinksProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\WebPage',
        ],
        'specialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\WebPage',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
