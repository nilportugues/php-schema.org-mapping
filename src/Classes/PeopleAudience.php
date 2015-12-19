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

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\HealthConditionProperty;
use NilPortugues\SchemaOrg\Properties\RequiredGenderProperty;
use NilPortugues\SchemaOrg\Properties\RequiredMaxAgeProperty;
use NilPortugues\SchemaOrg\Properties\RequiredMinAgeProperty;
use NilPortugues\SchemaOrg\Properties\SuggestedGenderProperty;
use NilPortugues\SchemaOrg\Properties\SuggestedMaxAgeProperty;
use NilPortugues\SchemaOrg\Properties\SuggestedMinAgeProperty;

/**
 * Classes PeopleAudience.
 */
class PeopleAudience
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/PeopleAudience';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

    /**
     * @return Mapping
     */
    public static function healthCondition()
    {
        return HealthConditionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function requiredGender()
    {
        return RequiredGenderProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function requiredMaxAge()
    {
        return RequiredMaxAgeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function requiredMinAge()
    {
        return RequiredMinAgeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function suggestedGender()
    {
        return SuggestedGenderProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function suggestedMaxAge()
    {
        return SuggestedMaxAgeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function suggestedMinAge()
    {
        return SuggestedMinAgeProperty::create(self::schemaUrl());
    }
}
