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

abstract class AbstractRequest implements RequestInterface {

    // Abstract
    abstract protected function execute();

    // Common
    private $method;
    private $parameters;
    private $urlElements;

    public function __construct(/*String*/ $method, /*array*/ $params, /*array*/ $urlElements) {
        $this->method = $method;
        $this->parameters = $params;
        $this->$urlElements = $urlElements;
    }

    public function getMethod() {
        return $this->method;
    }

    public function getParams() {
        return $this->parameters;
    }

    public function getUrlElements() {
        return $this->urlElements;
    }
};