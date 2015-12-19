<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\SchemaProperty;

/**
 * The currency (coded using ISO 4217, http://en.wikipedia.org/wiki/ISO_4217 ) used for the main salary information in this job posting or for this employee.
 */
class SalaryCurrencyProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/salaryCurrency';
    const PROPERTY_NAME = 'salaryCurrency';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
        'http://schema.org/EmployeeRole',
    ];
}
