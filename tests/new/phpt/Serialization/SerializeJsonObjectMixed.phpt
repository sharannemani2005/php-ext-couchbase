--TEST--
Serialization - SerializeJsonObjectMixed
--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("Serialization", "testSerializeJsonObjectMixed");
--EXPECT--
PHP_COUCHBASE_OK