<?php
namespace Controller;

class FrontController
{
    public function __construct()
    {
        if(isset($_GET['route'])){
            $currRoute = $_GET['route'];
        } else {
            $currRoute = APP_DEFAULT_ROUTE;
        }

        $controller = new PageController();

        switch($currRoute){
            case 'connect':
                $methodName = "connectAction";
                break;
            default:
                $methodName = "homeAction";
                break;
        }
        echo $controller->$methodName();
//        include APP_VIEW_DIR.'home.html';
    }
}