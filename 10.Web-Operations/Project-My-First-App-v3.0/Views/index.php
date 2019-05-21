<?php

        echo '<a href="products/edit/">Create new product</a>';
        echo '<table border="1">';
        
        /**
         * @var \Models\Products $model
         */
        
	foreach($this->model->getList() as $product){
		
		$date = ($product['create_date']?date('d.m.Y',strtotime($product['create_date'])):'n/a');
		
		echo '<tr>';
		echo '<td>'.$product['product_id'].'</td>';
		echo '<td>'.$product['product_name'].'</td>';
                echo '<td>'.$product['cat_name'].'</td>';
		echo '<td>'.$date.'</td>';
                echo '<td><a href="products/view/'.$product['product_id'].'">View</a></td>';
                echo '<td><a href="products/edit/'.$product['product_id'].'">Edit</a></td>';
		echo '</tr>';
        }
        
	echo '</table>';

