<?php
class HomeModel extends Model 
{
    public function getUserCount () {
        $sql = 'SELECT * FROM `users`';
        $stm = $this->db->prepare($sql);
        $stm->execute();
        $res = $stm->fetchColumn();
        return $res;
    }
    public function getProductsCount () {
        $sql = 'SELECT COUNT(*) FROM products';
        $stm = $this->db->prepare($sql);
        $stm->execute();
        $res = $stm->fetchColumn();
        return $res;
    }
    public function getOrdersCount () {
        $sql = 'SELECT COUNT(*) FROM orders';
        $stm = $this->db->prepare($sql);
        $stm->execute();
        $res = $stm->fetchColumn();
        return $res;
    }
    public function getOrders () {
        $sql = "SELECT
        orders.id as id,
        orders.amount as total,
        users.fullName,
        users.email
        FROM orders
        LEFT JOIN users ON users.id = orders.user_id
        ";
        $result = array();
        $stm = $this->db->prepare($sql);
        $stm->execute();
        while($row = $stm->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
}