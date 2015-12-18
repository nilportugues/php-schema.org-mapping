<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ServiceOperator;

/**
 * Classes GovernmentService.
 */
class GovernmentService
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/GovernmentService';

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
    public static function serviceOperator()
    {
        return ServiceOperator::create(self::schemaUrl());
    }
}
