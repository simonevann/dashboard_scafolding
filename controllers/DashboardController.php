<?php
require_once('models/User.php');

/**
 * Controller per la gestione della dashboard
 */

class DashboardController{

    private $user;

    public function __construct(){
        $this->user = new User();
    }

}