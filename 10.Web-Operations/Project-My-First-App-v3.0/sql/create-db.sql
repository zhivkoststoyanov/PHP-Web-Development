/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  User
 * Created: Apr 24, 2019
 */

	CREATE DATABASE IF NOT EXISTS shop;
	
        USE shop; 

	CREATE TABLE IF NOT EXISTS categories(
	cat_id INT(11) NOT NULL,
	cat_name VARCHAR (255) NOT NULL,
	create_date DATETIME DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (cat_id)
	);
	
        USE shop;

	CREATE TABLE IF NOT EXISTS products(
	product_id INT(11) NOT NULL AUTO_INCREMENT,
	product_name VARCHAR(255) NOT NULL,
	price DECIMAL (6,2) DEFAULT 0,
	cat_id INT(11),
	description TEXT,
	create_date DATETIME DEFAULT CURRENT_TIMESTAMP,
	last_update DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY(product_id),
	CONSTRAINT `FK1` FOREIGN KEY (cat_id) REFERENCES categories(cat_id)	
	);
	
	INSERT INTO categories (cat_id, cat_name) VALUES
	(1, 'Drinks'), (2, 'Foods'), (3, 'Others');
	
        INSERT INTO products (product_name, price, cat_id, description, create_date) VALUES
	('Coffe', 2.56, 1 , null, '2018-01-01'), ('Coca-cola', 2.1, 1, null, '2018-02-01'),
	('Chips', 2.5, 2, null, '2019-01-01');
	