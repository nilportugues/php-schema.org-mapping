<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\ArticleBody;
use NilPortugues\SchemaOrg\Properties\ArticleSection;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PageEnd;
use NilPortugues\SchemaOrg\Properties\PageStart;
use NilPortugues\SchemaOrg\Properties\Pagination;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Url;
use NilPortugues\SchemaOrg\Properties\WordCount;

/**
 * Classes BlogPosting
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A blog post.
 */
class BlogPosting
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/BlogPosting";

   /**
    * Returns the URL of the current definition at http://schema.org
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
        return AdditionalType::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function alternateName()
    {
        return AlternateName::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function articleBody()
    {
        return ArticleBody::create(Article::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function articleSection()
    {
        return ArticleSection::create(Article::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function description()
    {
        return Description::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function image()
    {
        return Image::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPage::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function name()
    {
        return Name::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function pageEnd()
    {
        return PageEnd::create(Article::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function pageStart()
    {
        return PageStart::create(Article::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function pagination()
    {
        return Pagination::create(Article::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function potentialAction()
    {
        return PotentialAction::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function sameAs()
    {
        return SameAs::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function wordCount()
    {
        return WordCount::create(Article::schemaUrl());
    }
}