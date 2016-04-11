<?php
namespace Controller;

class PageController
{

    public function __construct()
    {
        $this->connect = new ConnectionController();
    }

    public function homeAction(){
        include APP_VIEW_DIR.'home.html';
    }

    public function connectAction(){
        $this->connect->connAction();
        include APP_VIEW_DIR.'connect.php';
    }
}