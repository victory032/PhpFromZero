<?php

namespace PhpFromZero\Http\Bag;

/**
 * 
 * @var $_POST
 * 
 * @author Justin Dah-kenangnon <dah.kenangnon@gmail.com>
 * 
 * @link https://github.com/Dahkenangnon
 * @link https://ePatriote.com
 * @link https://Creative.ePatriote.com
 */
class Post extends Bag
{
    public function __construct()
    {
        parent::__construct($_POST);
    }
}
