<?php

use LDAP\Result;

class Model extends Dbh
{
    protected function validLogin($username,$password)
    {
        $sql = "SELECT * FROM user_accounts WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);
        $rowCount = $stmt->rowCount();

        $results = $stmt->fetch();

        if($rowCount == 0){
            return false;
        } else {
            if(!password_verify($password,$results['password'])){
                return false;
            } else {
                return true;
            }
        }
    }

    protected function insertLoginAction($device,$ipAddress,$location)
    {
        $sql = "INSERT INTO user_action (`device`,`ip_address`,`location`) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$device,$ipAddress,$location]);
        return;
    }

    protected function getPrivilege($email)
    {
        $sql = "SELECT privilege FROM user_accounts WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        $result = $stmt->fetch();
        return $result;
    }

    protected function getAction($email)
    {
        $sql = "SELECT * FROM timekeeping_action WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $results = $stmt->fetchAll();

        foreach ($results as $key => $value) {
            $createDate = date_create($value['added_at']);
            $formatDate = date_format($createDate,"Y-m-d");        

            if($formatDate == date('Y-m-d')){
                return $value;
            }
        }
    }

    protected function updateAction($action,$time,$email)
    {
        $sql = "UPDATE timekeeping_action SET $action = ? WHERE `email` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$time,$email]);
    }
    
}