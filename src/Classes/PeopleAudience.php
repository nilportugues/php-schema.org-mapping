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
 * @method static \NilPortugues\SchemaOrg\Properties\HealthConditionProperty healthCondition()
 * @method static \NilPortugues\SchemaOrg\Properties\RequiredGenderProperty requiredGender()
 * @method static \NilPortugues\SchemaOrg\Properties\RequiredMaxAgeProperty requiredMaxAge()
 * @method static \NilPortugues\SchemaOrg\Properties\RequiredMinAgeProperty requiredMinAge()
 * @method static \NilPortugues\SchemaOrg\Properties\SuggestedGenderProperty suggestedGender()
 * @method static \NilPortugues\SchemaOrg\Properties\SuggestedMaxAgeProperty suggestedMaxAge()
 * @method static \NilPortugues\SchemaOrg\Properties\SuggestedMinAgeProperty suggestedMinAge()
 * METHODEND.
 *
 * A set of characteristics belonging to people, e.g. who compose an item's target audience.
 */
class PeopleAudience extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/PeopleAudience';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'healthCondition' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HealthConditionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
        'requiredGender' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RequiredGenderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
        'requiredMaxAge' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RequiredMaxAgeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
        'requiredMinAge' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RequiredMinAgeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
        'suggestedGender' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SuggestedGenderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
        'suggestedMaxAge' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SuggestedMaxAgeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
        'suggestedMinAge' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SuggestedMinAgeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
    ];
}
