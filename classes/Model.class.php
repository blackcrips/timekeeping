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

    protected function dbInsert_tKeepHistory($email,$columnName)
    {
        $id = $this->dbGet_tKeepHistoryId($email);
        date_default_timezone_set("Asia/Manila");
        $currentTime = date("h:i:sa");

        $sql1 = "UPDATE tkeep_history SET ";
        $sql2 = ` = {$currentTime} WHERE email = ?`;

        $sql = "UPDATE tkeep_history SET $columnName = ? WHERE email = ? AND id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$currentTime,$email,$id['id']]);
    }



    private function dbGet_tKeepHistoryId($email){
        $sql = "SELECT id FROM tkeep_history WHERE email = ? ORDER BY id DESC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        return $result = $stmt->fetch();
    }

    protected function dbGetLast_tKeepAction($email)
    {
        $action_data = $this-> dbCheckLast_tKeepHistory($email);

        if($action_data == 'No data'){
            return $action_data;
        } else {
            $actionCount = 0;
            foreach($action_data as $key => $value){
                if($value == ""){
                    return $key;
                } else {
                    $actionCount++;
                }
            }

            if($actionCount >= 4){
                return 'time_in';
            }
        }
    }

    private function dbCheckLast_tKeepHistory($email)
    {
        $sql = "SELECT date,time_in,break_out,break_in,time_out FROM tkeep_history WHERE email = ? ORDER BY id DESC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        if($stmt->rowCount() <= 0){
            return "No data";
        } else {
            return $result = $stmt->fetch();
        }
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
        $sql = "SELECT leave_type,start_request,end_request,leave_reason,email,acknowledge_by,added_at FROM leave_history WHERE email = ? ORDER BY added_at DESC";
        $stmt = $this->connect()->prepare($sql);

        if(!$stmt->execute([$email])){
            exit(0);
            die();
        } else {

            $results = $stmt->fetchAll();

            $arrayTemplate = [];

            foreach($results as $result){
                array_push($arrayTemplate,$result);
            }

            return $arrayTemplate;
        }
    }
    
    protected function dbViewMyTimestamp($email)
    {
    //  $sql = "SELECT"   
    }
}