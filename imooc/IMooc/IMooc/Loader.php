<?php

namespace IMooc;
class Loader

{

	static function autoload($class){
	
include BASEDIR.'/'.str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
 
	}
}