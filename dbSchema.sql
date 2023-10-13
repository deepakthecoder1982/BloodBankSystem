CREATE TABLE Hospitals (
    hospital_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE Receivers (
    receiver_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    blood_group VARCHAR(10) NOT NULL
);

CREATE TABLE BloodSamples (
    sample_id INT AUTO_INCREMENT PRIMARY KEY,
    hospital_id INT,
    blood_group VARCHAR(10) NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (hospital_id) REFERENCES Hospitals (hospital_id)
);

CREATE TABLE BloodRequests (
    request_id INT AUTO_INCREMENT PRIMARY KEY,
    receiver_id INT,
    blood_group VARCHAR(10) NOT NULL,
    status VARCHAR(20) NOT NULL,
    request_date DATE NOT NULL,
    FOREIGN KEY (receiver_id) REFERENCES Receivers (receiver_id)
);


-- Insert sample hospital data
INSERT INTO Hospitals (name, email, password) VALUES
('Hospital A', 'hospitalA@example.com', 'hashed_password_for_hospital_A'),
('Hospital B', 'hospitalB@example.com', 'hashed_password_for_hospital_B');

-- Insert sample receiver data
INSERT INTO Receivers (name, email, password, blood_group) VALUES
('John Doe', 'john@example.com', 'hashed_password_for_john', 'A+'),
('Alice Smith', 'alice@example.com', 'hashed_password_for_alice', 'B+');

-- Insert sample blood samples
INSERT INTO BloodSamples (hospital_id, blood_group, quantity) VALUES
(1, 'A+', 20),
(1, 'B+', 15),
(2, 'A+', 10);

-- Insert sample blood requests
INSERT INTO BloodRequests (receiver_id, blood_group, status, request_date) VALUES
(1, 'A+', 'Pending', '2023-10-05'),
(2, 'B+', 'Approved', '2023-10-06');
