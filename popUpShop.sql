CREATE TABLE popupShop (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(50),
    shop_name VARCHAR(50),
    contact_no VARCHAR(255),
    stall_number VARCHAR(255),
    event_date VARCHAR(255),
    DateAdded TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
