create database stu_info;
use stu_info;

create table student(
    ID int(10) not null AUTO_INCREMENT,
    NAME varchar(20),
    EMAIL varchar(50),
    PHONE_NO varchar(20),
    CITY varchar(10),
     PRIMARY key(ID)
);

insert into student(NAME,EMAIL,PHONE_NO,CITY) values 
("Hemant Dhiwar","hemantdhiwar123@gmail.com","6267775295","Birgaow"),
("Priya Mishra","priyamishra20902@gmail.com","6266145384","Kumhari"),
("Ashwani sahu","ashwanikumarsahu1255@gmail.com","6256788485","Raipur"),
("Shiavni shukala","Shivani123@gmail.com","6267521598","Beglor"),
("kishan tandhan","kishantandhan25@gmail.com","8591456325","Raipur"),
("Dikeshwar ","dkumar25@gmail.com","7895445325","urla");
