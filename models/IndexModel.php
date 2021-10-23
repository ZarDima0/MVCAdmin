<?php 
class IndexModel extends Model 
{
    public function checkUser () {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE login = :login AND password = :password";

        $stmt = $this->db->prepare($sql);
        $stmt->bindvalue(":login", $login, PDO::PARAM_STR);
        $stmt->bindvalue(":password", $password, PDO::PARAM_STR);
        $stmt->execute();
        
        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!empty($res)){

            header('Location: /home');

        }else {
            false;
        }

    }
}