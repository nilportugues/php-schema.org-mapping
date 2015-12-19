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
 * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
 */
class StudySubjectProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/studySubject';
    const PROPERTY_NAME = 'studySubject';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalStudy',
    ];
}
