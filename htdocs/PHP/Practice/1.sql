CREATE DATABASe if not EXISTS class;
use database class;

CREATE TABLE student(
                        id int(11) AUTO_INCREMENT PRIMARY KEY,
                        name varchar(255),
                        age tinyint(4),
                        address varchar(200),
                        telephone varchar(20)
);
INSERT INTO student(name, age, address, telephone) VALUES ('Phong',20,'Tren Troi',0123456789),
                           ('Duc',21,'Duoi Dat',0156894614);