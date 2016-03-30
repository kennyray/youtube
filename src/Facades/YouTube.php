<?php
/**
 * 
 * Author: Kenny Ray
 * Email: kenny@kennyray.com
 * Date: 3/29/16
 * 
 */
namespace KennyRay\YouTube\Facades;

use Illuminate\Support\Facades\Facade;

class YouTube extends Facade{
	protected static function getFacadeAccessor(){
		return 'youtube';
	}
}