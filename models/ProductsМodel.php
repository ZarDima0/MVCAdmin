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
    public function addProduct ($data,$file) {
        list("name"=> $name, 'description'=> $description, 'category'=> $category,'price'=>$price) = $data;
        $sql = "INSERT INTO `products` (`id`, `name`, `description`, `category`, `price`, `url`) VALUES ( NULL , :name, :description, :category,:price,:url)";
        $stm = $this->db->prepare($sql);
        $stm->bindvalue(":name",$name,PDO::PARAM_STR);
        $stm->bindvalue(":description",$description,PDO::PARAM_STR);
        $stm->bindvalue(":category",$category,PDO::PARAM_STR);
        $stm->bindvalue(":price",$price,PDO::PARAM_STR);
        $stm->bindvalue(":url",$file,PDO::PARAM_STR);
        $stm->execute();
        $id = ['id' => $this->db->lastInsertId()];
        return $id;
    }
}