--TEST--
EmptyKey - EmptyKeyReplace
--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("EmptyKey", "testEmptyKeyReplace");
--EXPECT--
PHP_COUCHBASE_OK