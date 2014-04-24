<?php
/**
 * Created by PhpStorm.
 * User: ubermensch
 * Date: 4/12/14
 * Time: 6:37 PM
 */

namespace openparse\model\requests;


abstract class AbstractHttpRequest implements RequestInterface {

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