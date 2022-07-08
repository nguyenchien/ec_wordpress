<?php

/**
 * Class SWE_JSON_API_Controller
 */
class SWE_JSON_API_Controller {
    function __construct() {
        $this->beforeAction();
        $this->filters();
    }
    public function beforeAction()
    {
        return array();
    }

    function actionIndex(){
        return 'method not yet implemented!';
    }

    function actionDetail(){
        return 'method not yet implemented!';
    }

    public function filters()
    {
        return array();
    }
}