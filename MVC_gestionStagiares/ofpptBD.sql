create database ofppt;
use ofppt;
create table stagiaire(
id int primary key auto_increment,
nom varchar(30),
prenom varchar(30),
ville varchar(30),
age int

);

INSERT INTO stagiaire (nom, prenom, ville, age) VALUES
('Doe', 'John', 'New York', 25),
('Smith', 'Emma', 'Los Angeles', 30),
('Garcia', 'Carlos', 'Miami', 28),
('Johnson', 'Emily', 'Chicago', 22),
('Kim', 'Seung', 'Seoul', 27);

select * from stagiaire