
CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT ,
    user_id varchar(255) NOT NULL ,
    user_email varchar(70) NOT NULL,
    user_password  varchar (70),
    user_role    varchar (70),
    PRIMARY KEY (user_id),
    UNIQUE KEY (id)
)

CREATE TABLE customer(
    id INT NOT NULL AUTO_INCREMENT,
    customer_id varchar(255) NOT NULL ,
    customer_name  varchar(70)  NOT NULL, 
    customer_contact_number  varchar(70),
    customer_address         varchar(70),
    user_id varchar(255),
    PRIMARY KEY (customer_id),
    UNIQUE KEY(id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)

)

CREATE TABLE seller(
    id INT NOT NULL AUTO_INCREMENT,
    seller_id varchar(255) NOT NULL ,
    seller_name  varchar(70)  NOT NULL, 
    seller_contact_number  varchar(70),
    seller_address         varchar(70),
    user_id varchar(255),
    PRIMARY KEY (seller_id),
    UNIQUE KEY(id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
)


CREATE TABLE admin(
    id INT NOT NULL AUTO_INCREMENT,
    admin_id varchar(255) NOT NULL ,
    admin_name  varchar(70)  NOT NULL,
    admin_contact_number  varchar(70),
    user_id varchar(255),
    PRIMARY KEY (admin_id),
    UNIQUE KEY(id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
)

CREATE TABLE category(
    id INT NOT NULL AUTO_INCREMENT,
    category_id varchar(255) NOT NULL ,
    category_name varchar(70)  NOT NULL,
    PRIMARY KEY (category_id),
    UNIQUE KEY(id)
    
)

CREATE TABLE product(
    id int NOT NULL AUTO_INCREMENT,
    product_id  varchar(255) NOT NULL ,
    product_name     varchar(70) NOT NULL,
    product_unit_price   DECIMAL(10,2) NOT NULL,
    product_description    varchar(70) NOT NULL,
    product_quanity  BIGINT NOT NULL,
    upload_date    date NOT NULL,
    product_image_1 varchar(255),
    product_image_2 varchar(255),
    category_id varchar(255),
    seller_id varchar(255),
    PRIMARY KEY (product_id),
    UNIQUE KEY(id),
    FOREIGN KEY (category_id) REFERENCES category(category_id),
    FOREIGN KEY (seller_id) REFERENCES seller(seller_id)

)

CREATE TABLE `order`(
    id INT NOT NULL AUTO_INCREMENT,
    order_id  varchar(255) NOT NULL,
    order_date  date  NOT NULL,
    order_quantity  BIGINT NOT NULL,
    order_price     DECIMAL(10,2) NOT NULL,
    order_payment_method   varchar(70) NOT NULL,
    product_id  varchar(255),
    customer_id  varchar(255),
    seller_id  varchar(255),
    PRIMARY KEY (order_id),
    UNIQUE KEY(id),
    FOREIGN KEY (product_id) REFERENCES product(product_id),
    FOREIGN KEY (customer_id) REFERENCES customer(customer_id),
    FOREIGN KEY (seller_id) REFERENCES seller(seller_id)
)

CREATE TABLE upload(
    id  INT NOT NULL AUTO_INCREMENT,
    upload_id  varchar(255) NOT NULL ,
    upload_date    date NOT NULL,
    upload_product_quanity  BIGINT NOT NULL,
    product_id  varchar(255),
    seller_id  varchar(255),
    PRIMARY KEY (upload_id),
    UNIQUE KEY(id),
    FOREIGN KEY (product_id) REFERENCES product(product_id),
    FOREIGN KEY (seller_id) REFERENCES seller(seller_id)
)

CREATE TABLE sales_report (
    id  INT NOT NULL AUTO_INCREMENT,
    sales_report_id varchar(255) NOT NULL ,
    quantity_sold BIGINT NOT NULL,
    quantity_left  BIGINT NOT NULL,
    sold_date   date NOT NULL,
    product_id  varchar(255),
    customer_id  varchar(255),
    seller_id   varchar(255),
    PRIMARY KEY (sales_report_id),
    UNIQUE KEY(id),
    FOREIGN KEY (product_id) REFERENCES product(product_id),
    FOREIGN KEY (customer_id) REFERENCES customer(customer_id),
    FOREIGN KEY (seller_id) REFERENCES seller(seller_id)
)

CREATE TABLE description(
    id INT NOT NULL AUTO_INCREMENT,
    description_id varchar(255) NOT NULL,
    product_id varchar(255),
    category_id varchar(255),
    PRIMARY KEY (description_id),
    UNIQUE KEY(id),
    FOREIGN KEY (product_id) REFERENCES product(product_id),
    FOREIGN KEY (customer_id) REFERENCES customer(customer_id)
)

