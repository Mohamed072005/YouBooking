CREATE DATABASE IF not EXISTS youbooking;




use youbooking ;


CREATE TABLE localisation(
   location_id INT PRIMARY KEY AUTO_INCREMENT,
   pays varchar(255),
    ville varchar(255)
)ENGINE=INNODB;






CREATE TABLE hotel (
    hotel_id INT PRIMARY KEY AUTO_INCREMENT,
   location_id INT,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    contact_number VARCHAR(20),
    amenities TEXT,
    FOREIGN KEY (location_id) REFERENCES localisation(location_id) ON DELETE CASCADE
)ENGINE=INNODB;

CREATE TABLE typeroom (
    roomtype_id INT PRIMARY KEY AUTO_INCREMENT,
    room_type VARCHAR(50) NOT NULL
);
CREATE TABLE room (
    room_id INT PRIMARY KEY AUTO_INCREMENT,
    hotel_id INT,
    roomtype_id int,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL,
    amenities TEXT,
    FOREIGN KEY (roomtype_id) REFERENCES typeroom(roomtype_id) ON DELETE CASCADE,
    FOREIGN KEY (hotel_id) REFERENCES hotel(hotel_id) ON DELETE CASCADE
)ENGINE=INNODB;


CREATE TABLE roles(
  role_id int PRIMARY key AUTO_INCREMENT,
  role_type varchar(255)
)ENGINE=INNODB;

CREATE TABLE request(
  request_id int PRIMARY key AUTO_INCREMENT,
  request varchar(255) DEFAULT 'not send'
)ENGINE=INNODB;

CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    role_id INT ,
    request_id int , 
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    pass_word VARCHAR(100) NOT NULL,
    phone_number VARCHAR(20),
    FOREIGN KEY (request_id) REFERENCES request(request_id) ON DELETE CASCADE,
    FOREIGN KEY (role_id) REFERENCES roles(role_id) ON DELETE CASCADE
)ENGINE=INNODB;


CREATE TABLE reservation (
    reservation_id INT PRIMARY KEY AUTO_INCREMENT,
    room_id INT,
    user_id INT,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    total_cost DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (room_id) REFERENCES room(room_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
)ENGINE=INNODB;

CREATE TABLE invoice (
    invoice_id INT PRIMARY KEY AUTO_INCREMENT,
    reservation_id INT,
    issue_date DATE NOT NULL,
    amount_due DECIMAL(10, 2) NOT NULL,
    status VARCHAR(20) DEFAULT 'Unpaid',
    FOREIGN KEY (reservation_id) REFERENCES reservation(reservation_id) ON DELETE CASCADE
)ENGINE=INNODB;


