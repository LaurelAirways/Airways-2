create a database 
CREATE DATABASE airline_booking;
USE airline_booking;

CREATE TABLE bookings (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    from_city VARCHAR(100) NOT NULL,
    to_city VARCHAR(100) NOT NULL,
    departure_date DATE NOT NULL,
    return_date DATE,
    passengers INT(3) NOT NULL
);
 change the password in submit_form.php
