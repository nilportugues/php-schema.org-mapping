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
 * @method static \NilPortugues\SchemaOrg\Properties\CourseProperty course()
 * @method static \NilPortugues\SchemaOrg\Properties\ExerciseCourseProperty exerciseCourse()
 * @method static \NilPortugues\SchemaOrg\Properties\DietProperty diet()
 * @method static \NilPortugues\SchemaOrg\Properties\ExerciseRelatedDietProperty exerciseRelatedDiet()
 * @method static \NilPortugues\SchemaOrg\Properties\DistanceProperty distance()
 * @method static \NilPortugues\SchemaOrg\Properties\ExercisePlanProperty exercisePlan()
 * @method static \NilPortugues\SchemaOrg\Properties\ExerciseTypeProperty exerciseType()
 * @method static \NilPortugues\SchemaOrg\Properties\FromLocationProperty fromLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\OpponentProperty opponent()
 * @method static \NilPortugues\SchemaOrg\Properties\SportsActivityLocationProperty sportsActivityLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\SportsEventProperty sportsEvent()
 * @method static \NilPortugues\SchemaOrg\Properties\SportsTeamProperty sportsTeam()
 * @method static \NilPortugues\SchemaOrg\Properties\ToLocationProperty toLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\AgentProperty agent()
 * @method static \NilPortugues\SchemaOrg\Properties\EndTimeProperty endTime()
 * @method static \NilPortugues\SchemaOrg\Properties\InstrumentProperty instrument()
 * @method static \NilPortugues\SchemaOrg\Properties\LocationProperty location()
 * @method static \NilPortugues\SchemaOrg\Properties\ObjectTypeProperty objectType()
 * @method static \NilPortugues\SchemaOrg\Properties\ParticipantProperty participant()
 * @method static \NilPortugues\SchemaOrg\Properties\ResultProperty result()
 * @method static \NilPortugues\SchemaOrg\Properties\StartTimeProperty startTime()
 * @method static \NilPortugues\SchemaOrg\Properties\ActionStatusProperty actionStatus()
 * @method static \NilPortugues\SchemaOrg\Properties\ErrorProperty error()
 * @method static \NilPortugues\SchemaOrg\Properties\TargetProperty target()
 * METHODEND.
 *
 * The act of participating in exertive activity for the purposes of improving health and fitness.
 */
class ExerciseAction extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/ExerciseAction';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'actionStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActionStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'agent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AgentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'course' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CourseProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExerciseAction',
        ],
        'diet' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DietProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExerciseAction',
        ],
        'distance' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DistanceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExerciseAction',
        ],
        'endTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EndTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'error' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ErrorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'exerciseCourse' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExerciseCourseProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExerciseAction',
        ],
        'exercisePlan' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExercisePlanProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExerciseAction',
        ],
        'exerciseRelatedDiet' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExerciseRelatedDietProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExerciseAction',
        ],
        'exerciseType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExerciseTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExerciseAction',
        ],
        'fromLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FromLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExerciseAction',
        ],
        'instrument' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InstrumentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'location' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'objectType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ObjectTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'opponent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OpponentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExerciseAction',
        ],
        'participant' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ParticipantProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'result' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ResultProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'sportsActivityLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SportsActivityLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExerciseAction',
        ],
        'sportsEvent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SportsEventProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExerciseAction',
        ],
        'sportsTeam' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SportsTeamProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExerciseAction',
        ],
        'startTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StartTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'target' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TargetProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'toLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ToLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExerciseAction',
        ],
    ];
}
