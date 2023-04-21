<?php

class View extends Model {
    public function getLeaveDetails()
    {
        if(!isset($_SESSION)){
            session_start();
        }

        $email = $_SESSION['login-details']['user-email'];

        return $this->dbGetLeaveDetails($email);
    }

    public function viewMyTimestamp()
    {
        if(!isset($_SESSION)){
            session_start();
        }

        $email = $_SESSION['login-details']['user-email'];

        return $this->dbViewMyTimestamp($email);
    }
}