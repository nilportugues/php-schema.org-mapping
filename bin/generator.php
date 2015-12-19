#!/usr/bin/env php
<?php

use NilPortugues\SchemaOrg\Generator\FileSystem\FileSystem;
use NilPortugues\SchemaOrg\Generator\Parser;
use NilPortugues\SchemaOrg\Generator\SchemaClassWriter;
use NilPortugues\SchemaOrg\Generator\SchemaPropertyWriter;
use NilPortugues\SchemaOrg\Generator\SchemaRdfaData;
use NilPortugues\SchemaOrg\Generator\SchemaTestClassWriter;

include '../vendor/autoload.php';

$schemaData = new SchemaRdfaData();

$schemaParser = new Parser('../vendor/schemaorg/schemaorg/data/schema.rdfa');
$schemaParser->parseClass("/html/body/div[@typeof='rdfs:Class']", $schemaData);
$schemaParser->parseDataType("/html/body/div[@typeof='rdfs:Class http://schema.org/DataType']", $schemaData);
$schemaParser->parseProperty("/html/body/div[@typeof='rdf:Property']", $schemaData);

$propertyWriter = new SchemaPropertyWriter(new FileSystem(), '../src/Properties/');
$propertyWriter->write($schemaData);

$classWriter = new SchemaClassWriter(new FileSystem(), '../src/Classes/');
$classWriter->write($schemaData);

$classTestWriter = new SchemaTestClassWriter(new FileSystem(), '../tests/Classes/');
$classTestWriter->write($schemaData);
