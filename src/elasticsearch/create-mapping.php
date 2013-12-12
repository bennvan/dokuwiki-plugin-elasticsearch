#!/usr/bin/env php
<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';
require_once dirname(__FILE__) . '/conf/default.php';

$dsn = $conf['elasticsearch_dsn'];
$client = new \Elastica\Client($dsn);
$indexName = $conf['elasticsearch_indexname'];
$documentType = $conf['elasticsearch_documenttype'];
$index  = $client->getIndex($indexName);
$type   = $index->getType($documentType);
$mapping = new \Elastica\Type\Mapping();
$mapping->setType($type);
$mapping->setProperties(array( ));
$mapping->send();
