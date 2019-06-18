-- PHP + MYSQLi ระบบ Register แบบแบ่งสถานะ User & Admin
ฐานข้อมูล ตารางเดียวคือตาราง user มีฟิวส์อะไรบ้าง 
สำหรับเอาไว้ Copy ไปใน localhost/phpmyadmin/
CREATE TABLE user (
    id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(200) NOT NULL, 
    firstname VARCHAR(100) NOT NULL, 
    lastname VARCHAR(100) NOT NULL, 
    userlevel VARCHAR(1) NOT NULL 
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

