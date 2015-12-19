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

use NilPortugues\SchemaOrg\Property;

/**
 * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
 */
class IncludedRiskFactorProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/includedRiskFactor';
    const PROPERTY_NAME = 'includedRiskFactor';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalRiskEstimator',
    ];
}
