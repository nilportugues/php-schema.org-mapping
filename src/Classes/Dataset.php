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
 * @method static \NilPortugues\SchemaOrg\Properties\CatalogProperty catalog()
 * @method static \NilPortugues\SchemaOrg\Properties\IncludedDataCatalogProperty includedDataCatalog()
 * @method static \NilPortugues\SchemaOrg\Properties\DistributionProperty distribution()
 * @method static \NilPortugues\SchemaOrg\Properties\SpatialProperty spatial()
 * @method static \NilPortugues\SchemaOrg\Properties\TemporalProperty temporal()
 * @method static \NilPortugues\SchemaOrg\Properties\DatasetTimeIntervalProperty datasetTimeInterval()
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
 * A body of structured information describing some topic(s) of interest.
 */
class Dataset extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Dataset';

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
        'catalog' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CatalogProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Dataset',
        ],
        'datasetTimeInterval' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DatasetTimeIntervalProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Dataset',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'distribution' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DistributionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Dataset',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'includedDataCatalog' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IncludedDataCatalogProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Dataset',
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
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'spatial' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SpatialProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Dataset',
        ],
        'temporal' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TemporalProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Dataset',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
