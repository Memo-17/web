<?php

require_once 'config/config.php';
require_once 'helpers/sanitizers.php';

class FrontController
{
    private $defaultController = DEFAULT_CONTROLLER;
    private $defaultAction = DEFAULT_ACTION;

    public function router()
    {
        $controllerClass = $this->getControllerClassName();
        $actionFunction = $this->getActionFunctionName();

        require_once 'controllers/' . $controllerClass . '.php';

        $controller = new $controllerClass();

        $controller->$actionFunction();
    }

    private function getControllerClassName()
    {
        $controllerName = !empty($_REQUEST['c']) 
                            ? sanitizeText($_REQUEST['c']) 
                            : $this->defaultController;

        $controllerClassName = ucwords(strtolower($controllerName)) . "Controller";

        return $controllerClassName;
    }

    private function getActionFunctionName()
    {
        return !empty($_REQUEST['a'])
                    ? sanitizeText($_REQUEST['a'])
                    : $this->defaultAction;
    }
}