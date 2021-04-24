CREATE TABLE Users (
     ID INT PRIMARY KEY AUTO_INCREMENT,
     username VARCHAR(22) UNIQUE,
     password_hash VARCHAR(60)
);
-- INSERT INTO Users (username, password_hash)
-- VALUES ('Eric', '123456');