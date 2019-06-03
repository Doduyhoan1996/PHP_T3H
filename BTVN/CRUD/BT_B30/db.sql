CREATE TABLE product (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    price INT(10)  NOT NULL,
    inventory INT(10) NOT NULL,
    brand VARCHAR(100) NOT NULL,
    created_at DATE NOT NULL
);