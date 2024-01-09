USE wiki;
CREATE TABLE user (
id INT AUTO_INCREMENT PRIMARY KEY ,
full_Name VARCHAR(255),
password VARCHAR(255),
email VARCHAR(255),
birthday date,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
role ENUM ('author', 'admin')
);

CREATE TABLE categorie(
id INT AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR(255)
);

CREATE TABLE wiki (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
categorie_id INT,
title VARCHAR(255),
description VARCHAR(500),
content TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
status ENUM ('pending','draft', 'published', 'archived'),
FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (categorie_id) REFERENCES categorie(id) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE tag(
id INT AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR(255)
);

CREATE TABLE tagWiki(
id INT AUTO_INCREMENT PRIMARY KEY,
id_wiki INT,
id_tag INT,
FOREIGN KEY (id_wiki) REFERENCES wiki(id) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (id_tag) REFERENCES tag(id) ON DELETE CASCADE ON UPDATE CASCADE
);