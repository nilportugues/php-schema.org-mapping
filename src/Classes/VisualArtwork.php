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
 * @method static \NilPortugues\SchemaOrg\Properties\ArtformProperty artform()
 * @method static \NilPortugues\SchemaOrg\Properties\MaterialProperty material()
 * @method static \NilPortugues\SchemaOrg\Properties\ArtMediumProperty artMedium()
 * @method static \NilPortugues\SchemaOrg\Properties\SurfaceProperty surface()
 * @method static \NilPortugues\SchemaOrg\Properties\ArtworkSurfaceProperty artworkSurface()
 * @method static \NilPortugues\SchemaOrg\Properties\ArtEditionProperty artEdition()
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
 * A work of art that is primarily visual in character.
 */
class VisualArtwork extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/VisualArtwork';

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
        'artEdition' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ArtEditionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\VisualArtwork',
        ],
        'artMedium' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ArtMediumProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\VisualArtwork',
        ],
        'artform' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ArtformProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\VisualArtwork',
        ],
        'artworkSurface' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ArtworkSurfaceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\VisualArtwork',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'material' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MaterialProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\VisualArtwork',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'surface' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SurfaceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\VisualArtwork',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
