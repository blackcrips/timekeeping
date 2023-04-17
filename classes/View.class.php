<?php

class View extends Model {
    public function getLeaveDetails()
    {
        if(!isset($_SESSION)){
            session_start();
        }

        $email = $_SESSION['login-details']['user-email'];

        $this->dbGetLeaveDetails($email);
    }
}