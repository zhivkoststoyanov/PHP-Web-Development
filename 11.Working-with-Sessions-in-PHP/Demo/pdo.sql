/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  User
 * Created: May 30, 2019
 */
CREATE DATABASE IF NOT EXISTS session_ex;

USE session_ex;

CREATE TABLE users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50),
    password VARCHAR(50)
);

INSERT INTO users(username, password) VALUES("ZS","123");
INSERT INTO users(username, password) VALUES("AS","123");

