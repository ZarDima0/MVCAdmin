<?php
class UserModel extends Model 
{
    function AllUser () {
        $sql = "SELECT * FROM `users`";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        $res = $stm->fetchAll();
        return $res;
    }
}