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
 * @method static \NilPortugues\SchemaOrg\Properties\ArticleBodyProperty articleBody()
 * @method static \NilPortugues\SchemaOrg\Properties\ArticleSectionProperty articleSection()
 * @method static \NilPortugues\SchemaOrg\Properties\WordCountProperty wordCount()
 * @method static \NilPortugues\SchemaOrg\Properties\PageEndProperty pageEnd()
 * @method static \NilPortugues\SchemaOrg\Properties\PageStartProperty pageStart()
 * @method static \NilPortugues\SchemaOrg\Properties\PaginationProperty pagination()
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
 * A posting to a discussion forum.
 */
class DiscussionForumPosting extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/DiscussionForumPosting';

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
        'articleBody' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ArticleBodyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Article',
        ],
        'articleSection' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ArticleSectionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Article',
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
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'pageEnd' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PageEndProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Article',
        ],
        'pageStart' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PageStartProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Article',
        ],
        'pagination' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PaginationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Article',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'wordCount' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WordCountProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Article',
        ],
    ];
}
