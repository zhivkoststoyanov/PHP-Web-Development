<?php

/**
 * Description of Categories
 *
 * @author User
 */
namespace Models;

use PDO;

class Categories {

    /**
     * @var PDO
     */
    private $db;

    /**
     * Products constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getList() {

        $result = $this->db->query('SELECT cat_id, cat_name
	      		            FROM categories');


        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            yield $row;
        }
    }

//    public function createProduct($product_name, $price, $description, $cat_id) {
//        $result = $this->db->prepare('INSERT INTO products (product_name, cat_id,description,price)
//				      VALUES (:product_name,:cat_id,:description,:price) ');
//        $result->bindParam('product_name', $product_name);
//        $result->bindParam('cat_id', $cat_id);
//        $result->bindParam('description', $description);
//        $result->bindParam('price', $price);
//
//        $result->execute();
//        
//        return $this->db->lastInsertId();
//    }

}
