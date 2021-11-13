CREATE TABLE future_proof (
 
 sensor_id VARCHAR(250),
 value INT,
 created_at timestamp DEFAULT CURRENT_TIMESTAMP
 );

CREATE TABLE lastknown(
 ID VARCHAR(250), 
 name VARCHAR(250), 
 external_ip VARCHAR(250), 
 created_at timestamp DEFAULT CURRENT_TIMESTAMP
); 


CREATE TABLE RSS_FEED
(
 id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 title VARCHAR(250),
 link VARCHAR(250),
 
 description TEXT
);
