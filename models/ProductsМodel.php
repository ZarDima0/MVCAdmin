<?php
class ProductsМodel extends Model
{
    public function allGoods () {
        $sql = 'SELECT * FROM `products`';
        $stm = $this->db->prepare($sql);
        $stm->execute();
        $res = $stm->fetchAll();
        return $res;
    }
}