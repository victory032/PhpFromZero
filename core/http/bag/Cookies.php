<?php

namespace PhpFromZero\Http\Bag;

/**
 * 
 * @var $_COOKIE
 * 
 * @author Justin Dah-kenangnon <dah.kenangnon@gmail.com>
 * 
 * @link https://github.com/Dahkenangnon
 * @link https://ePatriote.com
 * @link https://Creative.ePatriote.com
 */
class Cookies extends Bag
{
    public function __construct()
    {
        parent::__construct($_COOKIE);
    }
}
