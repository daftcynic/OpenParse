<?php
/**
 * Created by PhpStorm.
 * User: ubermensch
 * Date: 4/12/14
 * Time: 5:48 PM
 */

namespace openparse\model\requests\factories;
use openparse\model\common\Factory;

abstract class RequestFactory implements Factory{

    abstract protected function makeRequest();

    private $method;
    private $params;
    private $urlElements;

    public function __construct($method, $params, $urlElements) {
        $this->method = $method;
        $this->params = $params;
        $this->urlElements;
    }

    public function makeObject()
    {
        $this->makeRequest();
    }
};
