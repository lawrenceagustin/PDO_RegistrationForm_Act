CREATE TABLE popupShop (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(20),
    last_name VARCHAR(20),
    email VARCHAR(30),
    shop_name VARCHAR(50),
    contact_no VARCHAR(20),
    stall_number VARCHAR(20),
    event_date VARCHAR(20),
    DateAdded TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
