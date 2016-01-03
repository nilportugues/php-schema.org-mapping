# Schema.org Mapping

[![Build Status](https://travis-ci.org/nilportugues/php-schema.org-mapping.svg?branch=master)](https://travis-ci.org/nilportugues/php-schema.org-mapping)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nilportugues/schema.org-mapping/badges/quality-score.png)](https://scrutinizer-ci.com/g/nilportugues/schema.org-mapping/?branch=master) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/d32a29ac-4f5f-4ede-8aac-caf6d5e2022b/mini.png??)](https://insight.sensiolabs.com/projects/d32a29ac-4f5f-4ede-8aac-caf6d5e2022b) 
[![Latest Stable Version](https://poser.pugx.org/nilportugues/schema-org/v/stable)](https://packagist.org/packages/nilportugues/schema-org) 
[![Total Downloads](https://poser.pugx.org/nilportugues/schema-org/downloads)](https://packagist.org/packages/nilportugues/schema-org) 
[![License](https://poser.pugx.org/nilportugues/schema-org/license)](https://packagist.org/packages/nilportugues/schema-org) 

A fluent interface to create mappings using Schema.org for Microdata and JSON-LD, supporting Schema.org v2.2 (latest).

## Installation

Use [Composer](https://getcomposer.org) to install the package:

```
$ composer require nilportugues/schema-org
```

## Usage

All you need to do is call the `SchemaOrg::schemas()` method and a fluent interface will be at your disposal.

Having a fluent interface makes it really easy to use as no previous knowledge of the Schemas is required. Considering how complex are the provided schemas by Schema.org this is really a relieve!

The interface will guide you to sub-schemas or down to property level.

```php
use NilPortugues\SchemaOrg\SchemaOrg;

$mapping = SchemaOrg::schemas()->blogPosting()->articleSection();

echo $mapping->name(); // returns "articleSection"
echo $mapping->url(); // returns "http://schema.org/articleSection"
echo $mapping->usedBy(); // returns "http://schema.org/Article"
```


## Why?

Schema.org vocabularies cover entities, relationships between entities and actions, and can easily be extended through a well-documented extension model.

Over 10 million sites use Schema.org to markup their web pages and email messages, including Google, Microsoft, Pinterest, Yandex and others.



## Contribute

Contributions to the package are always welcome!

* Report any bugs or issues you find on the [issue tracker](https://github.com/nilportugues/schema.org-mapping/issues/new).
* You can grab the source code at the package's [Git repository](https://github.com/nilportugues/schema.org-mapping).


## Support

Get in touch with me using one of the following means:

 - Emailing me at <contact@nilportugues.com>
 - Opening an [Issue](https://github.com/nilportugues/schema.org-mapping/issues/new)

## Authors

* [Nil Portugués Calderó](http://nilportugues.com)
* [The Community Contributors](https://github.com/nilportugues/schema.org-mapping/graphs/contributors)


## License
The code base is licensed under the [MIT license](LICENSE).
