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

    protected function tkeep_history($email,$actionData)
    {
        $sql = "INSERT INTO tkeep_history (`email`, `action_data`) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email,$actionData]);
        // exit(0);
    }

    protected function getLastTkeepAction($email)
    {
        $sql = "SELECT action_data FROM tkeep_history WHERE email = ? ORDER BY id DESC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $result = $stmt->fetch();

        return $result;
    }

    /**db leave will start here */

    protected function dbInsertLeaveRequest($leaveType,$startRequest,$endRequest,$reason,$userLogin)
    {
        $sql = "INSERT INTO leave_history (`email`,`leave_type`,`start_request`,`end_request`,`leave_reason`) VALUES (?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        
        if(!$stmt->execute([$userLogin,$leaveType,$startRequest,$endRequest,$reason])){
            exit(json_encode('Error data'));
        } else {
            exit(json_encode('success'));
        }
    }

    protected function dbGetLeaveDetails($email)
    {
        $sql = "SELECT * FROM leave_history WHERE email = ? ORDER BY added_at DESC";
        $stmt = $this->connect()->prepare($sql);

        if(!$stmt->execute([$email])){
            exit(0);
            die();
        } else {

            $results = $stmt->fetchAll();

            $arrayTemplate = array(
                "data" => []
            );

            for($i = 0; $i < count($results);$i++){
                $pushArray = [];
                foreach($results[$i] as $result){
                    array_push($pushArray,$result);
                }
                array_push($arrayTemplate,$pushArray);
            }


            exit(json_encode($arrayTemplate));
        }
    }
}