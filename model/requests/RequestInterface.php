<?php
/**
 * Created by PhpStorm.
 * User: ubermensch
 * Date: 4/12/14
 * Time: 5:15 PM
 */

namespace openparse\model\requests;


interface RequestInterface {
    public function getMethod();
    public function getParams();
    public function getUrlElements();
};

