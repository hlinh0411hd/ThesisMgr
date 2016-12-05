<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/1/2016
 * Time: 8:13 PM
 */

require_once APPPATH."third_party/PHPWord.php";

class Word extends PhpWord{
    public function __construct() {
        parent::__construct();
    }
}