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
 * @method static \NilPortugues\SchemaOrg\Properties\AssociatedArticleProperty associatedArticle()
 * @method static \NilPortugues\SchemaOrg\Properties\BitrateProperty bitrate()
 * @method static \NilPortugues\SchemaOrg\Properties\ContentSizeProperty contentSize()
 * @method static \NilPortugues\SchemaOrg\Properties\ContentUrlProperty contentUrl()
 * @method static \NilPortugues\SchemaOrg\Properties\DurationProperty duration()
 * @method static \NilPortugues\SchemaOrg\Properties\EmbedUrlProperty embedUrl()
 * @method static \NilPortugues\SchemaOrg\Properties\EncodesCreativeWorkProperty encodesCreativeWork()
 * @method static \NilPortugues\SchemaOrg\Properties\EncodingFormatProperty encodingFormat()
 * @method static \NilPortugues\SchemaOrg\Properties\ExpiresProperty expires()
 * @method static \NilPortugues\SchemaOrg\Properties\HeightProperty height()
 * @method static \NilPortugues\SchemaOrg\Properties\PlayerTypeProperty playerType()
 * @method static \NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty productionCompany()
 * @method static \NilPortugues\SchemaOrg\Properties\RegionsAllowedProperty regionsAllowed()
 * @method static \NilPortugues\SchemaOrg\Properties\RequiresSubscriptionProperty requiresSubscription()
 * @method static \NilPortugues\SchemaOrg\Properties\UploadDateProperty uploadDate()
 * @method static \NilPortugues\SchemaOrg\Properties\WidthProperty width()
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
 * An image of a visual machine-readable code such as a barcode or QR code.
 */
class Barcode extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Barcode';

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
        'associatedArticle' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AssociatedArticleProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'bitrate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BitrateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'contentSize' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContentSizeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'contentUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContentUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'duration' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DurationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'embedUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EmbedUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'encodesCreativeWork' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EncodesCreativeWorkProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'encodingFormat' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EncodingFormatProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'expires' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExpiresProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'height' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HeightProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'playerType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PlayerTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'productionCompany' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'regionsAllowed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RegionsAllowedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'requiresSubscription' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RequiresSubscriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'uploadDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UploadDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'width' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WidthProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
    ];
}
