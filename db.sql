CREATE DATABASE IF NOT EXISTS kihoroSafari;
USE kihoroSafari;

-- Drop existing tables if they exist
DROP TABLE IF EXISTS feedback;
DROP TABLE IF EXISTS contact_us;

-- Create feedback table
CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_no VARCHAR(15) NOT NULL,
    message TEXT NOT NULL,
    date_created DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY (email)
);

-- Create contact_us table
CREATE TABLE IF NOT EXISTS contact_us (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    date_created DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY (email)
);

-- Insert sample data into feedback table
INSERT INTO feedback (name, email, phone_no, message) VALUES
('John Doe', 'johndoe@example.com', '123-456-7890', 'Great service! I had an amazing experience with Kihoro Safaris.'),
('Jane Smith', 'janesmith@example.com', '098-765-4321', 'I loved the destinations and the accommodations provided. Highly recommended!');

-- Insert sample data into contact_us table
INSERT INTO contact_us (name, email, subject, message) VALUES
('Alice Brown', 'alicebrown@example.com', 'Inquiry', 'I would like to know more about your travel packages.'),
('Bob Johnson', 'bobjohnson@example.com', 'Booking', 'I am interested in booking a trip to Masai Mara.');

