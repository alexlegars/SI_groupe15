<?php
namespace Controller;

use Model\ConnectionRepository;

class ConnectionController
{
    private $pdo;

    public function __construct()
    {
    }

    public function connAction(){
        $repo = new ConnectionRepository($this->pdo);
        $connect = $repo->get($_POST['pseudo']);

        return $connect;
    }
}