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
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\OutcomeProperty;
use NilPortugues\SchemaOrg\Properties\PopulationProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\SponsorProperty;
use NilPortugues\SchemaOrg\Properties\StatusProperty;
use NilPortugues\SchemaOrg\Properties\StudyLocationProperty;
use NilPortugues\SchemaOrg\Properties\StudySubjectProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;

/**
 * Classes MedicalStudy.
 */
class MedicalStudy
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/MedicalStudy';

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
    public static function additionalType()
    {
        return AdditionalTypeProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternateName()
    {
        return AlternateNameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function description()
    {
        return DescriptionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function name()
    {
        return NameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function outcome()
    {
        return OutcomeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function population()
    {
        return PopulationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function potentialAction()
    {
        return PotentialActionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sameAs()
    {
        return SameAsProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sponsor()
    {
        return SponsorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function status()
    {
        return StatusProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function studyLocation()
    {
        return StudyLocationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function studySubject()
    {
        return StudySubjectProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
