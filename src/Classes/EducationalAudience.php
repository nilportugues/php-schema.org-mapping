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
use NilPortugues\SchemaOrg\Properties\EducationalRoleProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes EducationalAudience.
 */
class EducationalAudience extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/EducationalAudience';

    /**
     * @return Mapping
     */
    public static function educationalRole()
    {
        return EducationalRoleProperty::create(self::schemaUrl());
    }
}
