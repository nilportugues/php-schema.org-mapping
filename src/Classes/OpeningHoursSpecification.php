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
 * @method static \NilPortugues\SchemaOrg\Properties\ClosesProperty closes()
 * @method static \NilPortugues\SchemaOrg\Properties\DayOfWeekProperty dayOfWeek()
 * @method static \NilPortugues\SchemaOrg\Properties\OpensProperty opens()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidFromProperty validFrom()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidThroughProperty validThrough()
 * METHODEND.
 *
 * A structured value providing information about the opening hours of a place or a certain service inside a place.
 */
class OpeningHoursSpecification extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/OpeningHoursSpecification';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'closes' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ClosesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OpeningHoursSpecification',
        ],
        'dayOfWeek' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DayOfWeekProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OpeningHoursSpecification',
        ],
        'opens' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OpensProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OpeningHoursSpecification',
        ],
        'validFrom' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidFromProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OpeningHoursSpecification',
        ],
        'validThrough' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidThroughProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OpeningHoursSpecification',
        ],
    ];
}
