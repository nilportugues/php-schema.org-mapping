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
 * @method static \NilPortugues\SchemaOrg\Properties\NumberOfEmployeesProperty numberOfEmployees()
 * @method static \NilPortugues\SchemaOrg\Properties\YearlyRevenueProperty yearlyRevenue()
 * @method static \NilPortugues\SchemaOrg\Properties\YearsInOperationProperty yearsInOperation()
 * METHODEND.
 *
 * A set of characteristics belonging to businesses, e.g. who compose an item's target audience.
 */
class BusinessAudience extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/BusinessAudience';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'numberOfEmployees' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NumberOfEmployeesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BusinessAudience',
        ],
        'yearlyRevenue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\YearlyRevenueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BusinessAudience',
        ],
        'yearsInOperation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\YearsInOperationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BusinessAudience',
        ],
    ];
}
