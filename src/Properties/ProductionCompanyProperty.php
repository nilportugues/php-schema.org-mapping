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
 * The production company or studio responsible for the item e.g. series, video game, episode etc.
 */
class ProductionCompanyProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/productionCompany';
    const PROPERTY_NAME = 'productionCompany';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
        'http://schema.org/Movie',
        'http://schema.org/Episode',
        'http://schema.org/CreativeWorkSeason',
        'http://schema.org/TVSeries',
        'http://schema.org/RadioSeries',
        'http://schema.org/MovieSeries',
        'http://schema.org/VideoGameSeries',
        'http://schema.org/RadioSeries',
    ];
}
