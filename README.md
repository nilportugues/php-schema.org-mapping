# Schema.org Mapping

A fluid interface to create mappings using Schema.org for Microdata and JSON-LD.

Currently supporting Schema.org v2.2.

## Installation

Use [Composer](https://getcomposer.org) to install the package:

```
$ composer require nilportugues/schema-org
```

## Usage

```php
use NilPortugues\SchemaOrg\SchemaOrg;

$mapping = SchemaOrg::schemas()->blogPosting()->articleSection();

echo $mapping->url(); // returns "http://schema.org/articleSection"
echo $mapping->name(); // returns "articleSection"
echo $mapping->parent(); // returns "http://schema.org/Article"
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
