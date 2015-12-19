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
 * @method static \NilPortugues\SchemaOrg\Properties\UpvoteCountProperty upvoteCount()
 * @method static \NilPortugues\SchemaOrg\Properties\DownvoteCountProperty downvoteCount()
 * @method static \NilPortugues\SchemaOrg\Properties\AnswerCountProperty answerCount()
 * @method static \NilPortugues\SchemaOrg\Properties\AcceptedAnswerProperty acceptedAnswer()
 * @method static \NilPortugues\SchemaOrg\Properties\SuggestedAnswerProperty suggestedAnswer()
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
 * A specific question - e.g. from a user seeking answers online, or collected in a Frequently Asked Questions (FAQ) document.
 */
class Question extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Question';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'acceptedAnswer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AcceptedAnswerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Question',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'answerCount' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AnswerCountProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Question',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'downvoteCount' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DownvoteCountProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Question',
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
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'suggestedAnswer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SuggestedAnswerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Question',
        ],
        'upvoteCount' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UpvoteCountProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Question',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
