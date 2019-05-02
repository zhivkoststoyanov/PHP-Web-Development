<?php


class Products {

	/**
	 * @var PDO
	 */
	private $db;
	
	/**
	 * Products constructor.
	 * @param PDO $db
	 */
	public function __construct(PDO $db)
	{
		$this->db = $db;
	}
	
	public function getList(){
		
        $result = $this->db->query('SELECT product_id,product_name,p.create_date,c.cat_name
	      		            FROM products p
				    INNER JOIN categories c USING (cat_id)');
             
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                    yield $row;                      
        		
            }
	}
        
        
        public function getOne(int $product_id){
		
        $result = $this->db->prepare('SELECT product_id,product_name,p.create_date,c.cat_name, description, last_update
	      		            FROM products p
				    INNER JOIN categories c USING (cat_id)
                                    WHERE product_id= :product_id');
        $result->bindParam('product_id', $product_id);
        $result->execute();
        
        return $result->fetch(PDO::FETCH_ASSOC);
        }
        
        
        public function createProduct($product_name, $price, $description, $cat_id) {
        $result = $this->db->prepare('INSERT INTO products (product_name, cat_id,description,price)
				      VALUES (:product_name,:cat_id,:description,:price) ');
        $result->bindParam('product_name', $product_name);
        $result->bindParam('cat_id', $cat_id);
        $result->bindParam('description', $description);
        $result->bindParam('price', $price);

        $result->execute();
        
        return $this->db->lastInsertId();
    }

    }


