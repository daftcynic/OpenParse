<?php
/**
 * Created by PhpStorm.
 * User: ubermensch
 * Date: 4/12/14
 * Time: 5:45 PM
 */

namespace openparse\model\common;


interface Factory {
    // returns instance of an Object the Factory is for.
    public function makeObject();
} 